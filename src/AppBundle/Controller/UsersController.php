<?php

namespace AppBundle\Controller;

use AppBundle\Util\PdoUtil;
use Doctrine\Common\Proxy\Exception\InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class UsersController
 * @package AppBundle\Controller
 * @Route("/appanel")
 */
class UsersController extends Controller
{

    const TAG = "SAVAGETEAM";

    /**
     * @Route("/users", name="admin.users.index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $con = $this->getDoctrine()->getConnection();
        $search = $request->get("search");
        if (strlen(trim($search)) == 0) {
            $search = "-1";
        }
        $stmt = "
        select
            u.id,
            u.username,
            u.realname,
            u.email,
            a.path
        from users u
            join avatar a on u.avatar_id=a.id
        where
            ('$search' = '-1' or u.username like '%$search%' or u.realname like '%$search%')
        and
            u.deleted_at is null
        order by u.created_at asc
        ";
        $users = PdoUtil::selectFromCursor($con, $stmt);

        return $this->render("AppBundle:Users:index.html.twig", array(
            "users" => $users,
        ));
    }

    /**
     * @Route("/newUser", name="admin.users.new")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $name = $request->get("name");
        $realname = $request->get("realname");
        $email = $request->get("email");
        $password = $request->get("password");
        $avatar = $request->get("avatarId");

        /**
         * Make validations and return errors if exist
         */
        if ("post" == strtolower($request->getMethod())) {
            $errors = array();
            if (strlen(trim($name)) == 0) {
                $errors["name"] = "El nombre de usuario es obligatorio";
            }
            if (strlen(trim($realname)) == 0) {
                $errors["realname"] = "El nombre es obligatorio";
            }
            if (strlen(trim($email)) == 0) {
                $errors["email"] = "El email es obligatorio";
            }
            if (strlen(trim($password)) == 0) {
                $errors["password"] = "La contraseña es obligatoria";
            }
            /**
             * Return if errors exist
             */
            if (0 != count($errors)) {
                $data = array(
                    "name" => $name,
                    "realname" => $realname,
                    "email" => $email,
                    "errors" => $errors
                );
                return $this->render("AppBundle:Users:createUsers.html.twig", $data);
            }

            /**
             * Verifying unique stuff
             */
            $stmt = "
            select 1 from users where username = '$name' or email = '$email'
            ";
            $result = PdoUtil::selectSingleRecordOrNull($em->getConnection(), $stmt);
            if (null != $result) {
                $this->addFlash("warning", "El nombre de usuario o email ya estan registrados");
                return $this->redirectToRoute("admin.users.new");
            }

            /**
             * Create user
             */
            $stmt = "
            insert into users (username, email, password, realname, avatar_id)
            values
            (:username, :email, :password, :realname, :avatar_id)
            ";
            PdoUtil::executePrepared($em->getConnection(), $stmt, array(
                "username" => $name,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_BCRYPT),
                "realname" => $realname,
                "avatar_id" => $avatar,
            ));

            $this->addFlash("msg", "Puedes iniciar sesion");
            return $this->redirectToRoute("admin.login");

        }
        return $this->render("AppBundle:Users:createUsers.html.twig");
    }

    /**
     * @Route("/createUser", name="admin.users.create")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function createUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $name = $request->get("name");
        $realname = $request->get("realname");
        $email = $request->get("email");
        $passwod = $request->get("password");
        $avatar = $request->get("avatarId");

        /**
         * Make validations and return errors if exist
         */
        $errors = array();
        if (strlen(trim($name)) == 0) {
            array_push($errors, "name", "El nombre de usuario es obligatorio");
        }
        if (strlen(trim($realname)) == 0) {
            array_push($errors, "realname", "El nombre es obligatorio");
        }
        if (strlen(trim($email)) == 0) {
            array_push($errors, "email", "El email es obligatorio");
        }
        if (strlen(trim($passwod)) == 0) {
            array_push($errors, "password", "La contraseña es obligatoria");
        }
        if (0 != count($errors)) {
            $data = array(
                "name" => $name,
                "realname" => $realname,
                "email" => $email,
                "errors" => $errors
            );
        }

        return new JsonResponse();
    }


    /**
     * @Route("/uploadAvatar", name="admin.upload.avatar")
     * @param Request $request
     * @return JsonResponse
     */
    public function uploadAvatarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $file = $request->files->get("file");
        if (is_null($file)) {
            throw new InvalidArgumentException("The file can't be empty");
        }
        $dir = "avatar/";
        /**
         * Pictures stuff
         */
        $md5 = md5_file($file);
        $ext = $request->get("extension");
        /**
         * If avatar exist return id and path, else, move the file and create a row in avatar
         */
        $stmt = "
        select id, md5, path from avatar where md5 = '$md5'
        ";
        $result = PdoUtil::selectSingleRecordOrNull($em->getConnection(), $stmt);
        if (null != $result) {
            $url = $request->getUriForPath("/avatar/".$result["path"]);

            return new JsonResponse(array(
                "id" => $result["id"],
                "path" => $url,
            ));
        }
        $fileName = $md5 . "." .$ext;
        $file->move($dir, $fileName);
        $stmt = "
        insert into avatar (md5, path) values (:md5, :filename)
        ";
        PdoUtil::executePrepared($em->getConnection(), $stmt, array(
            "md5" => $md5,
            "filename" => $fileName
        ));
        $stmt = "
        select id, md5, path from avatar where md5 = '$md5'
        ";
        $result = PdoUtil::selectSingleRecordOrNull($em->getConnection(), $stmt);
        $this->get("logger")->debug(sprintf("%s, FILENAME: %s, EXT: %s", self::TAG, $fileName, $ext));

        return new JsonResponse(array(
            "id" => $result["id"],
            "path" => $request->getUriForPath("/avatar/".$result["path"]),
        ));
    }

    /**
     * @Route("/disabledUser", name="admin.users.disabled")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteUserAction(Request $request)
    {
        $con = $this->getDoctrine()->getConnection();
        $id = $request->get("id");
        $username = $request->get("username");
        $email = $request->get("email");

        $stmt = "
        update users
            set users.deleted_at=now()
        where
            users.id=:id
        and
            users.username=:username
        and
            users.email=:email
        ";
        PdoUtil::executePrepared($con, $stmt, array(
            "id" => $id,
            "username" => $username,
            "email" => $email,
        ));

        return $this->redirectToRoute("admin.users.index");
    }

}

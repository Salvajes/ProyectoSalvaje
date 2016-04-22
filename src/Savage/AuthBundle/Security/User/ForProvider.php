<?php
/**
 * Created by PhpStorm.
 * User: jaime
 * Date: 1/04/16
 * Time: 08:17 PM
 */

namespace Savage\AuthBundle\Security\User;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class ForProvider implements UserProviderInterface
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function loadUserByUsername($username)
    {
        $user = $this->em
            ->createQuery("select u from AppBundle:Users  u where u.username = :username or u.email = :username")
            ->setParameter("username", $username)
            ->getOneOrNullResult();

        if (is_null($user)) {
            throw new UsernameNotFoundException("EL nombre de usuario no existe");
        }

        return new UserForProvider($user->getUsername(), $user->getPassword(), $user->getSalt(), $user->getRoles());

    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof UserForProvider) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === "Savage\\AuthBundle\\Security\\UserForProvider";
    }
}
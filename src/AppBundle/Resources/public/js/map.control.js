/**
 * Created by yohualli on 16/04/16.
 */

/**
 * Clase que crea poligonos.
 * @constructor
 */
function Polygons () {
    this.polygon_ = undefined;
}

Polygons.prototype.setLat = function(lat){
    this.lat_ = lat;
    return this;
};


Polygons.prototype.setLng = function(lng){
    this.lng_ = lng;
    return this;
};

Polygons.prototype.setDistance = function(distance){
    this.distance_ = distance;
    return this;
};

Polygons.prototype.getLat = function(){
    return this.lat_;
};

Polygons.prototype.getLng = function(){
    return this.lng_;
};

Polygons.prototype.getDistance = function(){
    return this.distance_;
};

Polygons.prototype.createPolygon = function(array){
    console.log(this.polygon_);
    if(this.polygon_ != undefined){
        map.removeLayer(this.polygon_);
    }
    this.polygon_ = L.polygon(array);
    map.addLayer(this.polygon_);
};

Polygons.prototype.toRad = function(n){
    return n * Math.PI / 180;
};

Polygons.prototype.toDeg = function(n){
    return n * 180 / Math.PI;
};

Polygons.prototype.destVincenty = function(lat1, lon1, brng, dist){
    var a = 6378137,
        b = 6356752.3142,
        f = 1 / 298.257223563, // WGS-84 ellipsiod
        s = dist,
        alpha1 = this.toRad(brng),
        sinAlpha1 = Math.sin(alpha1),
        cosAlpha1 = Math.cos(alpha1),
        tanU1 = (1 - f) * Math.tan(this.toRad(lat1)),
        cosU1 = 1 / Math.sqrt((1 + tanU1 * tanU1)), sinU1 = tanU1 * cosU1,
        sigma1 = Math.atan2(tanU1, cosAlpha1),
        sinAlpha = cosU1 * sinAlpha1,
        cosSqAlpha = 1 - sinAlpha * sinAlpha,
        uSq = cosSqAlpha * (a * a - b * b) / (b * b),
        A = 1 + uSq / 16384 * (4096 + uSq * (-768 + uSq * (320 - 175 * uSq))),
        B = uSq / 1024 * (256 + uSq * (-128 + uSq * (74 - 47 * uSq))),
        sigma = s / (b * A),
        sigmaP = 2 * Math.PI;
    while (Math.abs(sigma - sigmaP) > 1e-12) {
        var cos2SigmaM = Math.cos(2 * sigma1 + sigma),
            sinSigma = Math.sin(sigma),
            cosSigma = Math.cos(sigma),
            deltaSigma = B * sinSigma * (cos2SigmaM + B / 4 * (cosSigma * (-1 + 2 * cos2SigmaM * cos2SigmaM) - B / 6 * cos2SigmaM * (-3 + 4 * sinSigma * sinSigma) * (-3 + 4 * cos2SigmaM * cos2SigmaM)));
        sigmaP = sigma;
        sigma = s / (b * A) + deltaSigma;
    }
    var tmp = sinU1 * sinSigma - cosU1 * cosSigma * cosAlpha1,
        lat2 = Math.atan2(sinU1 * cosSigma + cosU1 * sinSigma * cosAlpha1, (1 - f) * Math.sqrt(sinAlpha * sinAlpha + tmp * tmp)),
        lambda = Math.atan2(sinSigma * sinAlpha1, cosU1 * cosSigma - sinU1 * sinSigma * cosAlpha1),
        C = f / 16 * cosSqAlpha * (4 + f * (4 - 3 * cosSqAlpha)),
        La = lambda - (1 - C) * f * sinAlpha * (sigma + C * sinSigma * (cos2SigmaM + C * cosSigma * (-1 + 2 * cos2SigmaM * cos2SigmaM))),
        revAz = Math.atan2(sinAlpha, -tmp); // final bearing
    return new L.LatLng (this.toDeg(lat2), lon1 + this.toDeg(La));
};

Polygons.prototype.createLatLngPolygon = function(lat,lng,distance){
    var count = 0;
    var latlangArray = [];
    for(var i = 0; i < 20; i++){
        latlangArray.push(this.destVincenty(lat,lng,count,distance));
        count = count +18;
    }
    this.createPolygon(latlangArray);
};
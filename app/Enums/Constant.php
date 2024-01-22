<?php

namespace App\Enums;

class Constant
{
//    STATUS CODE
    const SUCCESS_CODE              = 200;
    const FALSE_CODE                = false;
    const CREATED_CODE              = 201;
    const ACCEPTED_CODE             = 202;
    const NO_CONTENT_CODE           = 204;
    const BAD_REQUEST_CODE          = 400;
    const UNAUTHORIZED_CODE         = 401;
    const FORBIDDEN_CODE            = 403;
    const NOT_FOUND_CODE            = 404;
    const METHOD_NOT_ALLOWED_CODE   = 405;
    const HTTP_UNPROCESSABLE_ENTITY   = 422;
    const INTERNAL_SV_ERROR_CODE    = 500;

    const DISTANCE_MAP_NOT_FOUND    = 'NOT_FOUND';

// ORDERING
    const ORDER_BY                  = 20;
    const PER_PAGE                  = 20;

// FIREBASE NOTIFY TYPE
    const FCM_FIREBASE_URI          = 'https://fcm.googleapis.com/fcm/send';

    //PATH FOLDER
    const PATH_PROFILE              = 'profile';
    const PATH_ROAD                 = 'road';
    const PATH_MERCHANDISES         = 'merchandises';
    const PATH_CATEGORY             = 'categories';
    const PATH_UPLOAD               = 'uploads';
    const PATH_LIBRARY              = 'libraries';
    const PATH_MESSAGE              = 'message';
    const PATH_STATION              = 'station';
    const PATH_NEWS                 = 'news';
    const PATH_PROMOTION            = 'promotions';

    const LOGO_PATH                 = 'http://188.166.232.154/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo_giv.8e897856.png&w=384&q=75';
}

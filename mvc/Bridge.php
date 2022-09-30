<?php
define('_WEB_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/QTDL-main');
define('_PATH_ROOT_PUBLIC', _WEB_ROOT . '/public');
define('_UPLOAD', $_SERVER["DOCUMENT_ROOT"] . '/QTDL-main/uploads');
define('_PATH_UPLOAD_PRODUCT', _WEB_ROOT . '/uploads/product/');
define('_PATH_UPLOAD_AVT', _WEB_ROOT . '/uploads/avt/');
define('_PATH_UPLOAD_SLIDER', _WEB_ROOT . '/uploads/slider/');
define('_PATH_UPLOAD_SETTING', _WEB_ROOT . '/uploads/setting/');


function getStatus($status)
{
    $message = "";
    switch ($status) {
        case 0:
            $message = "Chờ lấy hàng";
            break;
        case 1:
            $message = "Đang vận chuyển";
            break;
        case 2:
            $message = "Đã nhận";
            break;
    }

    return $message;
}


// Process URL from browser
require_once "./mvc/core/App.php";

// How controllers call Views & Models
require_once "./mvc/core/Controller.php";

// Connect Database
require_once "./mvc/core/DB.php";

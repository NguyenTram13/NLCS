<?php
session_start();
date_default_timezone_set(
    'Asia/Ho_Chi_Minh'
);
setlocale(LC_MONETARY, "en_US");
require_once "./global.php";

require_once "./mvc/Bridge.php";
$myApp = new App();

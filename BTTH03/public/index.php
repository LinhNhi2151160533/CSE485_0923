<?php
require_once ('../app/config/config.php');
require_once APP_ROOT.'/app/libs/DBConnection.php';
//require_once APP_ROOT.'/app/controllers/HomeController.php';
//
//$homeController = new HomeController();
//$homeController->index();

$controller = isset($_GET['controller'])?$_GET['controller']:'home';
$action = isset($_GET['action'])?$_GET['action']:'index';

if($controller=='home'){
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
}elseif ($controller=='Song'){
    require_once APP_ROOT.'/app/controllers/SongController.php';
    $SongController = new SongController();
    $SongController->index();
}else{
    echo "Khong ton tai URL";
}
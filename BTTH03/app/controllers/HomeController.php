<?php
require_once APP_ROOT.'/app/services/SongServices.php/';

class HomeController{
    public function index(){
        // Goi du lieu 
        $SongServices = new Song();
        $Song = $SongService->getAllPatients();
        // Render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }

}
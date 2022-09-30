<?php

class Admin extends Controller{


    function index(){
        return $this->view('admin',[
            'page'=>'home'
        ]);
    }
}
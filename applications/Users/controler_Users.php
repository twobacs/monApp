<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CUsers extends ziApp{

    public function __construct($comp,$pdo){
        include('model_'.$comp.'.php');
        include('view_'.$comp.'.php'); 
        $Mtemp='M'.$comp;
        $Vtemp='V'.$comp;
        $this->model=new $Mtemp($pdo);
        $this->view=new $Vtemp();
    }
    
    public function getFormLogin(){
        return file_get_contents('views\getFormLogin.html',FILE_USE_INCLUDE_PATH);
    }
    
    public function login(){
        return $this->model->login();
    }
}
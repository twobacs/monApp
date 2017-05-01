<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CUsers extends ziApp{

    public function __construct($comp,$pdo){
        include('model_'.$comp.'.php');        
        $Mtemp='M'.$comp;
        $this->model=new $Mtemp($pdo);
    }
    
    public function getFormLogin(){
        return $this->model->test();
    }
}
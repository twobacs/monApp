<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MUsers extends ziApp{
 
    public function __construct($dbpdo) {
        $this->pdo=$dbpdo;
    }
    
    public function login(){
        $sql='SELECT nom, prenom FROM utilisateurs WHERE Matricule="456"';
        $req=$this->pdo->prepare($sql);
        $req->execute();
        while($row=$req->fetch()){
            $nom=$row['nom'];
            $prenom=$row['prenom'];
        }
        return $nom.' '.$prenom;
    }
}
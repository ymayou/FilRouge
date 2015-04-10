<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Connexion extends PDO {

    private static $_instance;

    public function __construct() {
        
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            try{
                self::$_instance =  $bdd = new PDO("mysql:host=localhost;dbname=acu", "root", "", array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            } catch (Exception $ex) {
                echo "$ex";
                die('SQL error in class Connexion');
            }
        }
        return self::$_instance;
    }
}

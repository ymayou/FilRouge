<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDao
 *
 * @author florian
 */
require_once 'core/DAO/GenericDao.php';
class UserDao extends GenericDao{
    
    public $tableName;
    
    /**
     * Constructeur
     */
    public function __construct() {
        $this->tableName = "user";
        $cnx = "";
        parent::__construct($cnx, $this->tableName, "id");
    }
    
    /**
     * Insertion d'un nouveau user en base
     * @param type $login
     * @param type $password
     * @return boolean
     */
    public function insertNewUser($login,$password){
        $sql = "INSERT INTO ". $this->tableName ." VALUES ('". $login ."', SHA1('". $password ."'));";
        $requete = $this->connexion->prepare($sql);
         if($requete->execute()){
             return true;
         } else {
             return false;
         }
    }
    
    /**
     * Test la connexion d'un utilisateur en base
     * Retourne Vrai si OK False sinon
     * @param type $login
     * @param type $password
     * @return boolean
     */
    public function connectUser($login,$password){
        $sql = "SELECT * FROM ". $this->tableName ." WHERE login='". $login ."' AND password=SHA1('". $password ."');";
        $requete = $this->connexion->prepare($sql);
        if($requete->execute()){
            if($requete->rowcount() == 1){
                return true;
            }
         } 
         return false;
    }
    
    
}

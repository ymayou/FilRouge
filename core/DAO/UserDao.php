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
        $sql = "INSERT INTO ". $this->tableName ." VALUES (null, '". $login ."', '".SHA1($password)."');";
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
        $sql = "SELECT * FROM ". $this->tableName ." WHERE login='". $login ."' AND password= '".sha1($password )."' ;";
        $requete = $this->connexion->prepare($sql);
        if($requete->execute()){
            if($requete->rowcount() == 1){
                return true;
            }
         } 
         return false;
    }

    /**
     * Supprime un utilisateur en base
     * Retourne Vrai si OK False sinon
     * @param String $login
     * @return boolean
     */
    public function deleteUser($login){
        $sql = "DELETE FROM ". $this->tableName ." WHERE login='". $login ."';";
        $requete = $this->connexion->prepare($sql);
        if($requete->execute()){
            if($requete->rowcount() == 1){
                return true;
            }
        }
        return false;
    }

    /**
     * Contrôle si l'ancien mot de passe est bon
     * @param $login Nom de l'utiilsateur
     * @param $mdp Ancien mot de passe
     * @return boolean
     */
    public function controleMdp($login, $mdp)
    {
        $sql = "SELECT password FROM ". $this->tableName ." WHERE login= '".$login."' ;";
        $requete = $this->connexion->prepare($sql);
        if($requete->execute()){
            if($donnee = $requete->fetch()){
                if (sha1($mdp) == $donnee['password'])
                    return true;
                else
                    return false;
            } else {
                return false;
            }
        }
        return false;
    }

    /**
     * Update le mot de passe de l'utilisateur
     * @param $login Nom de l'utilisateur
     * @param $mdp Nouveau mot de passe
     * @return boolean
     */
    public function updateUser($login, $mdp)
    {
        $sql = "UPDATE ".$this->tableName." set password = '".sha1($mdp)."' WHERE login = '".$login."';";
        echo $sql;
        $requete = $this->connexion->prepare($sql);
        if ($requete->execute() > 0)
            return true;
        else
            return false;
    }
}

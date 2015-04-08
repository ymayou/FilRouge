<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'core/DAO/GenericDao.php';
class PathologieDao extends GenericDao {
    public $tableName;
    
    public function __construct($cnx){
        $this->tableName = 'patho';
        parent::__construct($cnx, "patho", "idP");
    }
    
    public function listePatho($nomMeridien, $type) {
        $sql = "SELECT * FROM ".$this->tableName ." WHERE 1=1 ";
        if($nomMeridien != '') {
            $sql .= " AND `mer` IN (SELECT code from meridien WHERE nom='". $nomMeridien ."') ";
        }
        if($type != '') {
            $sql .= " AND type='". $type ."'";
        }
        //echo '<br><br><br><br><br><br><br><br>'. $sql;
        $requete = $this->connexion->prepare($sql);
         if($requete->execute()){
             while($donnees = $requete->fetchAll()){
                 //print_r($donnees);
                 return $donnees;
             }
         } else {
             return null;
         }
    }
    
    public function listeTypePatho() {
        $sql = "SELECT distinct(type) FROM ".$this->tableName ." WHERE 1 ";
        $requete = $this->connexion->prepare($sql);
         if($requete->execute()){
             while($donnees = $requete->fetchAll()){
                 //print_r($donnees);
                 return $donnees;
             }
         } else {
             return null;
         }
    }
}
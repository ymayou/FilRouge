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
        $requete = $this->connexion->prepare($sql);
         if($requete->execute()){
             while($donnees = $requete->fetchAll()){
                 return $donnees;
             }
         } else {
             return null;
         }
    }

    public function listeTypePatho() {
        $sql = "SELECT distinct(type) FROM " . $this->tableName . " WHERE 1 ";
        $requete = $this->connexion->prepare($sql);
        if ($requete->execute()) {
            while ($donnees = $requete->fetchAll()) {
                return $donnees;
            }
        } else {
            return null;
        }
    }

    public function recherche($mot)
    {
        $sql = "SELECT * FROM ".$this->tableName." p "
                ."join symptPatho sp on sp.idP = p.idP "
                ."join keySympt ks on ks.idS = sp.idS "
                ."join keywords k on k.idK = ks.idK "
                ."WHERE k.name like '%".$mot."%'";
        $requete = $this->connexion->prepare($sql);
        if($requete->execute()){
            while($donnees = $requete->fetchAll()){
                return $donnees;
            }
        } else {
            return null;
        }
    }

    public function getPathos()
    {
        $sql = "SELECT p.type, p.desc as desc1, m.nom, m.element, s.desc as desc2 "
                ."FROM patho p "
                ."join meridien m on m.code = p.mer "
                ."join symptPatho sp on p.idP = sp.idP "
                ."join symptome s on s.idS = sp.idS";
        $requete = $this->connexion->prepare($sql);
        if($requete->execute()){
            while($donnees = $requete->fetchAll()){
                return $donnees;
            }
        } else {
            return null;
        }
    }
}
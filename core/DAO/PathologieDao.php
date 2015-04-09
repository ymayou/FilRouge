<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'core/DAO/GenericDao.php';

class PathologieDao extends GenericDao {

    public $tableName;

    public function __construct($cnx) {
        $this->tableName = 'patho';
        parent::__construct($cnx, "patho", "idP");
    }

    public function listePatho($nomMeridien, $type) {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE 1=1 ";
        if ($nomMeridien != '') {
            $sql .= " AND `mer` IN (SELECT code from meridien WHERE nom='" . $nomMeridien . "') ";
        }
        if ($type != '') {
            $sql .= " AND type='" . $type . "'";
        }
        //echo '<br><br><br><br><br><br><br><br>'. $sql;
        $requete = $this->connexion->prepare($sql);
        if ($requete->execute()) {
            while ($donnees = $requete->fetchAll()) {
                //print_r($donnees);
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
                //print_r($donnees);
                return $donnees;
            }
        } else {
            return null;
        }
    }

    public function recherche($keywords) {
        //Retourne les id des mots clés
        $sql = "SELECT idK FROM keywords WHERE name LIKE '$keywords'";
        $requete = $this->connexion->prepare($sql);
        $requete->execute();
        $donnees = $requete->fetch();
        $idKeyword = $donnees['idK'];

        $sql = "SELECT idS FROM keySympt WHERE idK = $idKeyword";
        $requete = $this->connexion->prepare($sql);
        $requete->execute();
        $idSymptome = array();
        while ($donnees = $requete->fetch()) {
            $idSymptome[] = $donnees['idS'];
        }

        $idPatho = array();
        foreach ($idSymptome as $idS) {
            $sql = "SELECT idP FROM symptPatho WHERE idS = $idS";
            $requete = $this->connexion->prepare($sql);
            $requete->execute();
            while ($donnees = $requete->fetch()) {
                $idPatho[] = $donnees['idP'];
            }
        }

        $listePatho = array();
        foreach ($idPatho as $idP) {
            $sql = "SELECT * FROM ". $this->tableName ." WHERE idP = $idP";
            $requete = $this->connexion->prepare($sql);
            $requete->execute();
            while ($donnees = $requete->fetch()) {
                $listePatho[] = $donnees;
            }
        }
        
        return $listePatho;
    }

}

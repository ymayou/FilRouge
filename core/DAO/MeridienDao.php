<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'core/DAO/GenericDao.php';
class MeridienDao extends GenericDao {
    public function __construct($cnx){
        parent::__construct($cnx, "meridien", "code");
    }

    public function findAllCaracteristique($sortingExpr,$from,$to){
        $sql = "SELECT distinct(element) FROM ".$this->tableName;
        if($sortingExpr != null){
            $sql.=" ORDER BY :sorting";
        }
        if($from !=null && $to != null){
            $sql .=" LIMIT :from,:to";
        }
        $requete = $this->connexion->prepare($sql);
        if($sortingExpr != null){
            $requete->bindValue(':sorting', $sortingExpr);
        }
        if($from !=null && $to != null){
            $requete->bindValue(':from', $from);
            $requete->bindValue(':to', $to);
        }
        if($requete->execute()){
            while($donnees = $requete->fetchAll()){
                return $donnees;
            }
        } else {
            return null;
        }
    }
    
    /**
     * Retourne tous les noms des méridiens
     * @return type
     */
    public function getAllName(){
        $sql = "SELECT nom from ". $this->tableName;
        $requete = $this->connexion->prepare($sql);
        if($requete->execute()){
            return $requete->fetchAll();
        } else {
            return null;
        }
    }
}
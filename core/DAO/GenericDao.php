<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'core/DAO/Connexion.php';
class GenericDao {
     protected $connexion;
     var $tableName;
     protected $idColumn;
     
     public function __construct($cnx,$tableName,$idColumn) {
         if($cnx == null){
             $this->connexion = Connexion::getInstance();
         } else {
             $this->connexion = $cnx;
         }
         $this->tableName = $tableName;
         $this->idColumn = $idColumn;
     }
     
     public function findAll($sortingExpr,$from,$to){
         $sql = "SELECT * FROM ".$this->tableName;
         if($sortingExpr != null){
             $sql.=" ORDER BY :sorting";
         }
         if($from !=null && $to != null){
             $sql .=" LIMIT :from,:to";
         }
         $requete = $this->connexion->prepare($sql);
         if ($sortingExpr != null)
             $requete->bindValue(':sorting', $sortingExpr);
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
     
     public function findById($pkVal){
         $sql = "SELECT * FROM ".$this->tableName." WHERE ".$this->idColumn." = :myVal";
         $requete = $this->connexion->prepare($sql);
         $requete->bindValue(':myVal', $pkVal);
         if($requete->execute()){
             if($donnees = $requete->fetch()){
                 return $donnees;
             } else {
                 return null;
             }
         }
     }
     
     public function deleteById($pkVal){
         $sql = "DELETE FROM ".$this->tableName." WHERE ".$this->idColumn." = :myVal";
         $requete = $this->connexion->prepare($sql);
         $requete->bindValue(':myVal', $pkVal);
         if($requete->execute()){
             return true;
         } else {
             return false;
         }
     }
}
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
}
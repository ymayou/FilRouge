<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DateServeur
 *
 * @author florian
 */
class DateServeur {

    function retourDate() {
        $serveur = $_SERVER['SERVER_SIGNATURE'];
        $date = date("d/m/Y");

        $tab['serveur'] = $serveur;
        $tab['date'] = $date;

        return $tab;
    }

}

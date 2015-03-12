<?php
require_once 'core/DAO/PathologieDao.php';
    $cnx = null;
    $test = new PathologieDao($cnx);
    if(isset($_POST["connexion"]))
        header("location: ?page=pathologie");
?>
<?php

    if (isset($_SESSION["nom"])){
        $user = $_SESSION["nom"];
        $smarty->assign("user", $user);
    }

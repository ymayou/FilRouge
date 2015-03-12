<?php
    if (isset($_SESSION["nom"]))
        $smarty->assign("user", $_SESSION["nom"]);
<?php
    require("./libs/Smarty.class.php");

    $tpl = new Smarty();

    $tpl->assign("ma_variable","Je suis une variable");

    $tpl->assign(array(
        "une_variable" => "Je suis une variable",
        "une_autre_variable" => "Je suis une belle variable"
    ));

    $tpl->display("test.html");
?>

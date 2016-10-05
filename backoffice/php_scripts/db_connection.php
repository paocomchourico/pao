<?php

//error handler function
session_start();
function customError($errno, $errstr) {
    $_SESSION["ERRO_DB"] = "[$errno] $errstr";
    header("Location:../../ErrorManager/ErrorPage.php?");
}

set_error_handler("customError");

global $base;
//    $base = mysql_connect("localhost","root","12345678") or die (mysql_error());
//    $db = mysql_select_db("paocomchourico", $base) or die (mysql_error()); 
// +++++++++++++++++++++++++++++++++++++++++ PASSWORD ALTERADA DE PROPOSITO PARA BATER E IR TER À PÁGINA NOVA :D TEM O 9 A MAIS +++++++++++++++++++++++++++++++++++++++++++
$base = mysql_connect("localhost", "root", "123456789");
$db = mysql_select_db("paocomchourico", $base);
?>
        
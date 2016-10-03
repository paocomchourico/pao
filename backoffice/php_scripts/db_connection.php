<?php
try{
    global $base;
//    $base = mysql_connect("localhost","root","12345678") or die (mysql_error());
//    $db = mysql_select_db("paocomchourico", $base) or die (mysql_error()); 
    // +++++++++++++++++++++++++++++++++++++++++ PASSWORD ALTERADA DE PROPOSITO PARA BATER E IR TER À PÁGINA NOVA :D TEM O 9 A MAIS +++++++++++++++++++++++++++++++++++++++++++
    $base = mysql_connect("localhost","root","123456789");
    $db = mysql_select_db("paocomchourico", $base);
    if(!$base or $db == null)
    {
        throw new Exception(mysql_error());
    }
}
//catch exception
catch(Exception $e) {
    $_SESSION['ERRO_DB'] = $e->getMessage();
      header("Location:../../ErrorManager/ErrorPage.php?");
  
}
?>
        
<?php
try{
    global $base;
//    $base = mysql_connect("localhost","root","12345678") or die (mysql_error());
//    $db = mysql_select_db("paocomchourico", $base) or die (mysql_error()); 
    $base = mysql_connect("localhost","root","12345678");
    $db = mysql_select_db("paocomchourico", $base);
    if(!$base or $db == null)
    {
        throw new Exception(mysql_error());
    }
}
//catch exception
catch(Exception $e) {
      header("Location:../../ErrorManager/ErrorPage.php?");
  
}
?>
        
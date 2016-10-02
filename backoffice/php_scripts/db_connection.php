<?php
    global $base;
    $base = mysql_connect("localhost","root","12345678") or die (mysql_error());
    $db = mysql_select_db("paocomchourico", $base) or die (mysql_error());
        
?>
        
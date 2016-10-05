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
//$base = mysql_connect("localhost", "root", "123456789");
//$db = mysql_select_db("paocomchourico", $base);
//


try {
    global $username;
    global $password;
    if (isset($_GET['email']))
        $username = $_GET['email'];
    else
        $username = '';
    if (isset($_GET['email']))
        $username = $_GET['email'];
    else
        $username = '';
    $pdo = new PDO("mysql:host='localhost';dbname='paocomchourico'", 'root', '12345');
    // execute the stored procedure
    $sql = 'CALL usp_GetUser()';
    // call the stored procedure
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    
    while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $r['Username'] ?></td>
                    <td><?php echo '$' . number_format($r['creditlimit'], 2) ?>
                    </td>
                </tr>
            <?php endwhile;
    
} catch (PDOException $e) {
    die("Error occurred:" . $e->getMessage());
}
?>




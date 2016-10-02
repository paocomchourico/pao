<?php
session_start();
include('php_scripts/db_connection.php');
if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
	$swidth = $_SESSION['screen_width'];
	$sheight = $_SESSION['screen_height'];
    
} else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
    $_SESSION['screen_width'] = $_REQUEST['width'];
    $_SESSION['screen_height'] = $_REQUEST['height'];
    header('Location: ' . $_SERVER['PHP_SELF']);
} else {
    echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
}
/*
	//Configura a localização em para SO Unix e Windows

	setlocale(LC_ALL, "pt_BR","ptb_bra");

	//echo strftime("%A, %d de %B de %Y |");



	if (isset($_REQUEST['opcao_menu'])) 

	{

		$om = $_REQUEST['opcao_menu'];

		if ($om=="areacli")

		{

			mysql_connect("localhost", "servicon_admin", "S3rv1c0nt4b1l"); 

			mysql_select_db("servicon_gestaosite");

			$formlogin=$_POST['login']; 

			$formpassword=$_POST['password']; 

			// To protect MySQL injection 

			$formlogin = stripslashes($formlogin);

			$formpassword = stripslashes($formpassword);

			$formlogin = mysql_real_escape_string($formlogin);

			$formpassword = mysql_real_escape_string($formpassword);

			$sql="SELECT * FROM clientes WHERE login='$formlogin' and password='$formpassword' and activo='1'";

			$result=mysql_query($sql);

			$count=mysql_num_rows($result);

			$registo=mysql_fetch_array($result);

			$idservi=$registo["idservi"];

			$nomecli=$registo["nome"];

			$resp=$registo["resp"];

			if($count==1)

			{

				$loginok="1";

			}

			else

			{

				$loginok="0";

			}

		}

	}

	else

	{

		$om = "";

	}

	if (isset($_REQUEST['opcao_submenu'])) 

		{

			$osm = $_REQUEST['opcao_submenu'];

		}

		else

		{

			$osm = "";

		}

?> */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!-- <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd"> -->

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=Iso-8859-1"/>
	<title>Pão com chouriço!</title>
	<meta name="keywords" content="" />
	<meta name="description" content="Pão com chouriço"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link href="../style.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
	
	
<?php
/* if(isset($_POST['width']) && isset($_POST['height'])) {
    $_SESSION['screen_width'] = $_POST['width'];
    $_SESSION['screen_height'] = $_POST['height'];
	$width = $_POST['width'];
	$height = $_POST['height'];
    echo json_encode(array('outcome'=>'success'));
} else {
    echo json_encode(array('outcome'=>'error','error'=>"Couldn't save dimension info"));
} */



?>
</head>
	<body>
		<!--<div id="header " style="width:<?php //echo $_SESSION['screen_width'];?>px; background-color:#bfe1bf; ">-->
		<div id="header">
			<?php
				include("header.php");
			?>
		</div>
		<div id="content">
			<?php
				include("content.php");
			?>
		</div>
		<div id="footer">
			<?php
				include("footer.php");
			?>
		</div>
	</body>
</html>


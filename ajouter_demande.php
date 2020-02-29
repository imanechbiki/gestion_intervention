<?php 
session_start();
$matricule_saved = $_SESSION['matricule_saved'];
$host = 'mysql:host=localhost;dbname=radees;';
$db_user = 'root';
$db_pass = 'rootroot';
$options = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ,);

try {
	$con = new PDO($host,$db_user,$db_pass,$options);
	$con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
	echo 'Faild To Connect' . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD']) {
	$type = filter_var($_POST['type'] , FILTER_SANITIZE_STRING);
	$desc = filter_var($_POST['description'] , FILTER_SANITIZE_STRING);
	
	$errors = array();
	foreach ($errors as $error) {
		echo $error;
	}
	
	if($type == 1){
		$m_t = 1;
	}else if ($imanefu == 2){
		$m_t = 2;
	}else {
		$m_t = 3;
	}
	
	if (empty($errors)) {
		$stmt = $con->prepare("INSERT INTO intervention(ID_TYPE,MATRICULE_A,MATRICULE_T,ETAT,DESCRIPTION) VALUES(:ID_TYPE,:MATRICULE_A,:MATRICULE_T,:ETAT,:DESCRIPTION)");
		$stmt->execute(array(
			'ID_TYPE' => $type,
			'MATRICULE_A' => $matricule_saved,   
			'MATRICULE_T' => $type,
			'ETAT' => 'en attente',
			'DESCRIPTION'		=> $desc
		
		)
		);
		
		echo "<div class='alert alert-success'>félicitation votre demmande a été envoyer </div>";
	}
}
else {
	header("Location: index.php");
	exit();
}
?>




<html>
 <head>
	<meta charset="iso-8859-1">
  <link href="css/bootstrap.css" rel="stylesheet" />
	<script src="js/jquery-3.2.1"></script>
	<script src="js/bootsrtrap.js"></script>
 </head>
 <body>
 
 
 </body>
 </html>
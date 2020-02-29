<?php 
session_start();

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
	$mt = filter_var($_POST['matricule1'] , FILTER_SANITIZE_STRING);
	$nm = filter_var($_POST['nom1'] , FILTER_SANITIZE_STRING);
	$pr = filter_var($_POST['prenom1'] , FILTER_SANITIZE_STRING);
	$ps = filter_var($_POST['postt1'] , FILTER_SANITIZE_STRING);
	$se = filter_var($_POST['service1'] , FILTER_SANITIZE_STRING);
	$pa = filter_var($_POST['pass1'] , FILTER_SANITIZE_STRING);
	$errors = array();
	foreach ($errors as $error) {
		echo $error;
	}
	if (empty($errors)) {
		$stmt = $con->prepare("INSERT INTO agent_technicien(MATRICULE,NOM,PRENOM,POST,ID_SERVICE,PASS) VALUES(:MATRICULE,:NOM,:PRENOM,:POST,:ID_SERVICE,:PASS)");
		$stmt->execute(array(
			'MATRICULE'		=> $mt,
			'NOM'		=> $nm,
			'PRENOM'		=> $pr,
			'POST'		=> $ps,
			'ID_SERVICE'		=> $se,
			'PASS'		=> $pa
			
		)
		);
		
		echo "<div class='alert alert-success'>félicitation l'\agent a été ajouter à la base de données connecter vous via <a href='login.php' >login</a></div>";
	}
}
else {
	header("Location: index.php");
	exit();
}
?>
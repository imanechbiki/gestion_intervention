<?php
session_start();
$matricule = $_POST['matricule1'];
function Is_Logged(){
	$_SESSION["authenticated"] = true;
	return true;
}
$_SESSION['matricule_saved'] = $matricule;
if(isset($_POST['matricule1']) && isset($_POST['pass1']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = 'rootroot';
    $db_name     = 'radees';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $matricule = mysqli_real_escape_string($db,htmlspecialchars($_POST['matricule1'])); 
    $pass = mysqli_real_escape_string($db,htmlspecialchars($_POST['pass1']));
	
    
	
			  
    if($matricule !== "" && $pass !== "")
    {
        $requete = "SELECT count(*) FROM agent_technicien where 
              MATRICULE = '".$matricule."' and PASS = '".$pass."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {  
           if($_SESSION['matricule1'] = $matricule &&  ($matricule=="1" || $matricule=="2" || $matricule=="3") )
		   {
			   Is_Logged();
			header('Location: afficher_demandes.php');   
		   }else {
			   Is_Logged();
			   header('Location: compte.php');
		   }
           
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>


<?php


$p=null;
			try{
		$p=new PDO ("mysql:host=localhost;dbname=radees;charset=utf8","root","rootroot");
		}
		catch (Exeption $e)
		{echo "probleme de connextion";}

$etat=$_POST['etat'];
$id=$_POST['id'];


$sql1="UPDATE intervention SET etat='".$etat."' where ID_INTER='".$id ."' ";
	$result1=$p->query($sql1);	
		echo "<div class='alert alert-success'> votre etat est modifier par $etat</div>";
$sql2="UPDATE intervention SET  ID_INTER='".$id."' where ID_INTER='".$id ."' ";
	$result2=$p->query($sql2);	
	
	
	
	
	



	
	?>
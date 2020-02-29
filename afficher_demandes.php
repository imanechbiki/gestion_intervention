<?php
session_start();
$matricule_saved = $_SESSION['matricule_saved'];

$matricule_saved2 = $_SESSION['matricule_saved2'];

require_once('auth.php');

?>
<html>
<head>
	<meta charset="iso-8859-1">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <style>
  img{
		width:50px;
		height:50px;
	}
	#tech{color:blue;}
	li{
	color:white;	
	}
	th{
	color:green;	
	}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="nav">
  <img src="image\Capture.PNG" >&nbsp;&nbsp;
  <h4 id="tech">Technicien</h4>&nbsp;&nbsp;
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="afficher_demandes.php/#">Acceuil <span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <form action="#" method="POST">
      <li class="nav-item">
        Afficher par:    <select name='etat2' class='form-control'>
					  <option>en attente</option>
					  <option>résolu</option>
					  <option>non résolu</option>
					  
					  </select>
      </li>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <li class="nav-item">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Afficher</button>
      </li>
	  </form>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
	  <li class="nav-item">
        <a class="nav-link" href="modifier.php">Modifier une intervention</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a href="logout.php">Deconnexion</a></button>
    </form>
  </div>
</nav>

</br>

<table class="table table-hover">
<thead>
<tr>

<th scope="col">Id</th>
<th scope="col">Type</th>
<th scope="col">Matricule agent</th>
<th scope="col">Matricule technicien</th>
<th scope="col">Etat</th>

<th scope="col">Description</th>


</tr>
</thead>
<?php 

$p=null;
			try{
		$p=new PDO ("mysql:host=localhost;dbname=radees;charset=utf8","root","rootroot");
		}
		catch (Exeption $e)
		{echo "probleme de connextion";}
	
$sql="SELECT * FROM `intervention` where MATRICULE_T='".$matricule_saved."' and ETAT='".$_POST['etat2']."'";

$result=$p->query($sql);


					  
while($r=$result->fetch())
{
	echo "<form action='modifier.php' method='POST'>";
	echo "<tbody>";
	echo '<tr class="table-primary">';
	echo " 
	<td scope='row'> $r[0] </td>
	<td>  $r[1] </td>
	<td> $r[2] </td> 
	<td> $r[3] </td> 
	<td> $r[4]</td> 
	
	<td> $r[5] </td> 
	";
	echo "</tr>";
	echo "</tbody>";
	echo "</form>";
}	


?>
</table>


</body>

</html>
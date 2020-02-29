<html>
<head>
<meta charset="iso-8859-1">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <style>
  #log{
	
	padding:20px 20px;
	margin-top:20px;
	-webkit-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
	}
	h4{color:orange;}
  </style>
</head>
<body>
<div class="container-fluid bg">
	 <div class="row">
	 <div class="col-md-4 col-sm-4 col-xs-12"></div>
	 <div class="col-md-4 col-sm-4 col-xs-12">
<form action="#" method="POST" id="log">
     
       <h4> Afficher par:  </h4>  <select name='etat2' class='form-control'>
					  <option>en attente</option>
					  <option>résolu</option>
					  <option>non résolu</option>
					  
					  </select>
    
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  </br>
        <button class="btn btn-info btn-block" type="submit">Afficher</button>
     
	  </form>
	  </div>
		 <div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
		</div>
		</br>
<table class="table table-hover">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">type</th>
<th scope="col">Matricule agent</th>
<th scope="col">matricule technicien</th>
<th scope="col">état</th>
<th scope="col">description</th>


</tr>
</thead>

<?php
//afficher etat
session_start();
$matricule_saved = $_SESSION['matricule_saved'];
require_once('auth.php');

$p=null;
			try{
		$p=new PDO ("mysql:host=localhost;dbname=radees;charset=utf8","root","rootroot");
		}
		catch (Exeption $e)
		{echo "probleme de connextion";}
	
$sql="SELECT * FROM `intervention` where MATRICULE_A='".$matricule_saved."' AND ETAT='".$_POST['etat2']."'";

$result=$p->query($sql);


					  
while($r=$result->fetch())
{
	
	echo "<tbody>";
	echo '<tr class="table-primary">';
	echo " <td scope='row'> $r[0] </td>
	<td>  $r[1] </td>
	<td> $r[2] </td> 
	<td> $r[3] </td> 
	<td> $r[4]</td> 
	<td> $r[5] </td> ";
	echo "</tr>";
	echo "</tbody>";
	
}	



?>
</table>
</body>
</html>
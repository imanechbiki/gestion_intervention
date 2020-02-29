<?php

?>





<html>
<head>
<title>AJOUTER UN NOUVEAU USER</title>
  <meta charset="iso-8859-1">
  <link href="css/bootstrap.css" rel="stylesheet" />
	<script src="js/jquery-3.2.1"></script>
	<script src="js/bootsrtrap.js"></script>
	<style type="text/css">
	.bg{background:url('image/orig_232421.jpg') no-repeat;
	
	
	}
	#log{
	
	padding:60px 40px;
	margin-top:80px;
	-webkit-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
	}
	img{width:250px;
	margin-left:40px;
    margin-right: 40px;
	border-radius: 50%;}
	h2{
	color:white;
	text-align:center;
	font-weight:bolder;
	}
	h4{font-size:20px;color:white;}
	#logo{
	width:350px;
	margin-left:-10px;
    
    	
	}
	</style>
</head>
	<body>
	 <div class="container-fluid bg">
	 <div class="row">
	 <div class="col-md-4 col-sm-4 col-xs-12"></div>
	 <div class="col-md-4 col-sm-4 col-xs-12">
		<form id="log" method="POST" action="insersion.php">
		<img id="logo" src="image/indus_logo_radees.jpg">
		<h2>Ajouter un agent!</h2>
				<img class="img img-responsive img-circle" src="image/Evva.gif">
			<table>
			   <div class="form-group">
				 <tr> <td><h4>Matricule:</h4></td> <td><input type="text" name="matricule1" class="form-control" ></td> </tr>
			  </div>
			  <div class="form-group">
				 <tr> <td><h4> Nom:</h4></td> <td> <input type="text" name="nom1" class="form-control"  /></td></tr>
				 </div>
				<div class="form-group">
				 <tr> <td><h4> Prenom:</h4></td> <td> <input type="text" name="prenom1" class="form-control"  /></td></tr>
				 </div>
				 <div class="form-group">
				 <tr> <td><h4> Poste:</h4></td> <td> <select name="postt1" class="form-control">
					  <option>Agent</option>
					  <option>Technicien</option>
					  
					  </select></td></tr>
				 </div>
				 
				 <div class="form-group">
				 <tr> <td><h4> Service:</h4></td> <td> <select name="service1" class="form-control">
					  <option value="1">etude et programmation - électricité</option>
					  <option value="2">travaux - électricité</option>
					  <option value="3">exploitation - électricité</option>
					  <option value="4">etude et programmation - eau et assainissement</option>
					  <option value="5">travaux - eau et assainissement</option>
					  <option value="6">exploitation - eau et assainissement</option>
					  <option value="7">laboratoire,comptage et analyse - eau et assainissement</option>
					  <option value="8">unité de gestion du projet d'assainissemant liquide - eau et assainissement</option>
					  <option value="9">entretien batiments et infographie - logistique </option>
					  <option value="10">approvisionnement et marchés - logistique </option>
					  <option value="11">ateliers et parc auto - logistique </option>
					  <option value="12">magasins et gestion de stock - logistique </option>
					  <option value="13">commercial - commerciale </option>
					  <option value="14">gros comptes - commerciale </option>
					  <option value="15">financier et comptable -financier et comptable </option>
					  <option value="16">juridique et inventaire permanent financier et comptable </option>
					  <option value="17">audit interne - audit ,controle de gestion et inspection </option>
					  <option value="18">controle de gestion - audit ,controle de gestion et inspection </option>
					  <option value="19">ressources humaines </option>
					  <option value="20">informatique </option>
					  <option value="21">techniciens </option>
					  </select></td></tr>
				 </div>
				 <div class="form-group">
				 <tr> <td> <h4>Mot de passe:</h4></td> <td> <input type="password" name="pass1" class="form-control"  /></td></tr>
				 </div>
				 
				 
				 
			</table>	
			
		  <!--bouton-->
		  &nbsp;
		 <button type="submit" name="submit" class="btn btn-secondary btn-block">Valider</button>
		 </form>
		 </div>
		 <div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
		</div>
	 </body>
 </html>
 
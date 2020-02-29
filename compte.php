 <?php
session_start();
require_once('auth.php');
//var_dump($_SESSION);
?>


<html>
<head>

  <meta charset="iso-8859-1">
  <link href="css/bootstrap.css" rel="stylesheet" />
	<script src="js/jquery-3.2.1"></script>
	<script src="js/bootsrtrap.js"></script>
	<style type="text/css">
	img{
		width:50px;
		height:50px;
	}
	h2{color:orange;}
	#agent{color:white;}
	#nav{
	margin-top:30px;	
	}
	h1{
	color:black;
	text-align:center;
	font-weight:bolder;
	}
	#demandes{
	
	padding:60px 40px;
	margin-top:80px;
	-webkit-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
	}
	</style>
	</head>
<body>
<h1> DEMANDE D'INTERVENTION INFORMATIQUE </h1>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="nav">
  <img src="image\Capture.PNG" >&nbsp;&nbsp;
  <h4 id="agent">Agent</h4>&nbsp;&nbsp;
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="compte.php">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="afficher_etat.php">L'état d'avancement des demandes</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a href="logout.php">Deconnexion</a></button>
    </form>
  </div>
</nav>
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12"> </div>
<div class="col-md-4 col-sm-4 col-xs-12">
<form id="demandes" action="ajouter_demande.php" method="POST">
<h2>Demander une intervention !</h2></br></br>
	<div class="form-group">
					

	 <tr> <td><h4>Type de problème :</h4></td> <td>
	 <select name="type" class="form-control">
	  <option value="1">Logiciel</option>
	  <option value="2">matériel</option>
	  <option value="3">réseau</option>
	  </select></td> </tr>
	</div>
	<div class="form-group">
	 <tr> <td><h4>Description  :</h4></td> <td><textarea name="description"  class="form-control"></textarea></td> </tr>
	</div>
  <button type="submit" name="submit" class="btn btn-primary btn-block ">Envoyer</button></br>
  
  </form>
  
</div>
	
 <div class="col-md-4 col-sm-4 col-xs-12"></div>
 </div>
 
</body>

</html>
<?php
session_start();
$matricule_saved = $_SESSION['matricule_saved'];



		
?>


<html>
<head>
<meta charset="iso-8859-1">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <style>
  #log{
	
	padding:60px 20px;
	margin-top:80px;
	-webkit-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
	}
	h3{color:orange;}
  
  </style>
</head>
	<body>
	 <div class="container-fluid bg">
	 <div class="row">
	 <div class="col-md-4 col-sm-4 col-xs-12"></div>
	 <div class="col-md-4 col-sm-4 col-xs-12">
	 
		<form id="log" method="POST" action="modifier2.php">
		<h3>Modifier une intervention !</h3>
		
				
			<table>
			   
			  
				
				 
				 <div class="form-group">
				 <tr> <td><h4> ID:</h4></td> <td> <input type="text" name ="id" class="form-control" ></br>
			</td></tr>
				 </div>
				 
				 <div class="form-group">
				 <tr> <td><h4> Etat:</h4></td> <td> <select name="etat" class="form-control" > 
				 <option>en attente</option>
					  <option>résolu</option>
					  <option>non résolu</option>
				 </select> </td> </tr>
				 </div>
				 
				 
				 
				 
			</table>	
			
		  <!--bouton-->
		  &nbsp;
		 <button type="submit" name="submit" class="btn btn-info btn-block">Modifier !</button>
		 </form>
		 </div>
		 <div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
		</div>
	 </body>
 </html>
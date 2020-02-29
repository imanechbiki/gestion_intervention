<html>

<head>

	<link href="css/bootstrap.css" rel="stylesheet" />
	<script src="js/jquery-3.2.1"></script>
	<script src="js/bootsrtrap.js"></script>
	<style type="text/css">
	.bg{background:url('image/depositphotos_147112959-stock-photo-internet-technology-business.jpg') no-repeat;
	
	}
	#log{
	
	padding:60px 40px;
	margin-top:80px;
	-webkit-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
box-shadow: 0px 2px 22px 8px rgba(0,0,0,0.75);
	}
	#logo{
	width:350px;
	margin-left:-10px;
    
    border-radius: 100%;	
	}
	
	img{width:250px;
	margin-left:40px;
    margin-right: 40px;
	border-radius: 50%;}
	h1{
	color:white;
	text-align:center;
	font-weight:bolder;
	}
	label{font-size:25px;color:white;}
	a{
		color:white;
	}
	/* update */
	
	</style>
		
</head>

<body>
  
	<div class="container-fluid bg">
	
		<div class="row">
		
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form id="log" method="POST" action="verification.php">
				<img id="logo" src="image/indus_logo_radees.jpg">
				<h1>Connectez vous !</h1>
				<img class="img img-responsive img-circle" src="image/Evva2.gif">
					<div class="form-group">
						<label>	Matricule</label>
						<input type="text" name="matricule1" class="form-control" placeholder="Enter ton nom d'utilisateur">
					</div>
					<div class="form-group">
						<label>Mot de passe</label>
						<input type="password" name="pass1" class="form-control" placeholder="Enter ton mot de passe">
					</div>
					
					
					<button type="submit" class="btn btn-secondary btn-block">Valider</button>
					
					<h4><a href="sing_in.php" >Ajouter un nouvel agent </a></h4>
				
				</form>
			
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
		
	</div>

</body>

</html>
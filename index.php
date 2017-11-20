<?php
	
	if ( (isset($_GET['language'])) && ($_GET['language'] == 'fr') )
	{
       	 	include_once('fr.php');
    	}
    	else // Langue par défaut (ici anglais)
    	{
        	include_once('en.php');
    	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>zzAgenda</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		 <div class="navbar-header">
		 	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		 		<span class="icon-bar"></span>
		 		<span class="icon-bar"></span>
		 		<span class="icon-bar"></span>
		 	</button>
		   <a class="navbar-brand" href="#" style="font-size: 30px; margin-bottom:3px;"><span class="glyphicon glyphicon-envelope" style="color: white;"></span>  zzAgenda</a>
		 </div>
		 <div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav" style="font-size:20px; margin-top:13px;">
		 		<li><a href="#" data-toggle="modal" data-target="#login-modal" style="font-size:20px;"> </a></li>
		 	</ul>
		 	<ul class="nav navbar-nav navbar-right">
		 		<li><a href="#" data-toggle="modal" data-target="#login-modal" style="font-size:20px;"><span class="glyphicon glyphicon-log-in"></span> <?php echo $log1; ?></a></li>
		     <li class="dropdown" style="margin-top:8px; margin-right:15px;">
		        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		        <?php echo $langue; ?>
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		           <li><a href="index.php?language=en">English</a></li>
		           <li><a href="index.php?language=fr">Français</a></li>
		        </ul>
		        </li>
		   </ul>
		  </div>
	  </div>
	</nav>

	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: center;">
		<div class="modal-dialog">
		<div class="loginmodal-container">
			<h1><?php echo $log2; ?></h1><br>
				<form method="post" action="login.php">
					<input type="text" name="username" placeholder="<?php echo $user; ?>">
					<input type="password" name="password" placeholder="<?php echo $pass; ?>">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				 </form>
		</div>
	</div>
	</div>
	
	<div class="container-fluid text-center" style="margin-top:40px;">    
	  <div class="row content">
		 <div class="col-sm-2 sidenav">
		 </div>
		 <div class="col-sm-8 text-left"> 
		   <h1><?php echo $bienvenue; ?></h1>
		   <br>
		   <h2><?php echo $description1; ?></h2>
		   <br>
		   <h2>10h30 | Conférence 1</h2>
		   <h4><span class="glyphicon glyphicon-bullhorn"></span> Conférence sur le jambon du WEI</h4>
		   <h4><span class="glyphicon glyphicon-map-marker"></span> Amphi Garcia, ISIMA, Campus des Cézeaux</h4>
		   <h4><span class="glyphicon glyphicon-user"></span> Mr Mousse</h4>
		   <h4><span class="glyphicon glyphicon-time"></span> Vendredi 29 Septembre à 10h30</h4>
		 </div>
	  </div>
	</div>
	<div class="footer">
		<div class="text-center">
		  <p>© Copyright Ligorio Raphaël, Pierrain Emmanuel</p>
		</div>
	</div>

	</body>
</html>


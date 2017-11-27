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
	<?php session_start(); ?>
	<head>
	  <title>zzAgenda</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	  <!-- Include Bootstrap Datepicker -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

    <style type="text/css">
    	#eventForm .form-control-feedback {
      	top: 0;
      	right: -15px;
      }
    </style>

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
		   <a class="navbar-brand" href="logout.php" style="font-size: 30px; margin-bottom:3px;"><span class="glyphicon glyphicon-envelope" style="color: white;"></span>  zzAgenda</a>
		 </div>
		 <div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav" style="font-size:20px; margin-top:13px;">
		 		<li><a href="#" data-toggle="modal" data-target="#login-modal" style="font-size:20px;"><?php echo $maps; ?></a></li>
		 	</ul>
		 	<ul class="nav navbar-nav navbar-right">
		 		<?php if(isset($_SESSION['username'])): ?>
		 			<li><p style="font-size:20px; margin-top:15px; margin-right:15px;"><?php echo $logged; ?> <?php echo $_SESSION['username'] ?></p></li>
		 		<?php endif; ?>
		 		<li><a href="logout.php" style="font-size:20px;"><span class="glyphicon glyphicon-log-out"></span> <?php echo $deco; ?></a></li>
		     <li class="dropdown" style="margin-top:8px; margin-right:15px;">
		        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		        <?php echo $langue; ?>
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		           <li><a href="user.php?language=en">English</a></li>
		           <li><a href="user.php?language=fr">Français</a></li>
		        </ul>
		        </li>
		   </ul>
	  </div>
	</nav>


<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: center;">
		<div class="modal-dialog">
		<div class="mapsmodal-container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2783.596024366213!2d3.109074716002895!3d45.75924417910547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sfr!4v1506964758042" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	</div>
	
	
<div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: center;">
			<div class="modal-dialog">
				<div>
					<form class="eventmodal-container" method="post" action="event.php">
						
							<div class="form-group" style="text-align: center;">
							<label for="Title" class="cols-sm-2 control-label" style="font-size: 30px;"><?php echo $bouton1; ?></label>
							</div>
					
						<div class="form-group">
							<label for="EventName" class="cols-sm-2 control-label"><?php echo $nom1; ?></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
									<input type="text" class="form-control" name="EventName" placeholder="<?php echo $nom2; ?>"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="EventDes" class="cols-sm-2 control-label">Description</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-bullhorn"></span></span>
									<textarea rows="4" class="form-control" name="EventDes" placeholder="<?php echo $desc; ?>"/></textarea>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="EventPlace" class="cols-sm-2 control-label"><?php echo $loc1; ?></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
									<input type="text" class="form-control" name="EventPlace" placeholder="<?php echo $loc2; ?>"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="EventSpeak" class="cols-sm-2 control-label"><?php echo $speak1; ?></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" class="form-control" name="EventSpeak" placeholder="<?php echo $speak2; ?>"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="EventDate" class="cols-sm-2 control-label">Date</label>
							<div class="cols-sm-10">
								<div class="input-group date" id="datePicker">
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									<input type="text" class="form-control" name="EventDate">
								</div>
							</div>
						</div>	
						
						<div class="form-group">
							<label for="EventTime" class="cols-sm-2 control-label"><?php echo $h; ?></label>
							<div class="cols-sm-10">
								<div class="input-group timePicker">
									<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
									<input type="time" class="form-control" name="EventTime">
									
								</div>
							</div>
						</div>
								

						<div class="form-group ">
							<input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="<?php echo $bouton4; ?>">
						</div>
						
					</form>
					
					<script>
						$(document).ready(function() {
		 					$('#datePicker')
		     				.datepicker({
		        			format: 'dd/mm/yyyy'
		     				})
		     			.on('changeDate', function(e) {
		     	   		 // Revalidate the date field
		         		$('#eventForm').formValidation('revalidateField', 'date');
		     			});

		 				$('#eventForm').formValidation({
		     				framework: 'bootstrap',
		     				icon: {
		        			valid: 'glyphicon glyphicon-ok',
		         		invalid: 'glyphicon glyphicon-remove',
		         		validating: 'glyphicon glyphicon-refresh'
		     			},
		     			fields: {
		        			date: {
		             		validators: {
		                 		notEmpty: {
		                     	message: 'The date is required'
		                 		},
		                 date: {
		                     format: 'MM/DD/YYYY',
		                     message: 'The date is not a valid'
		              		   }
		           		  }
		       		  }
		   		  }
		 			});
				});
				</script>
				

				</div>
			</div>
		</div>
	
	
	<div class="container-fluid text-center" style="margin-top:40px;">    
	  <div class="row content">
		 <div class="col-sm-2 sidenav">
		 </div>
		 <div class="col-sm-8 text-left"> 
		   <?php if($_SESSION['admin']): ?>
		   <button class="btn btn-primary" id="buttonAdd" data-toggle="modal" data-target="#event-modal" type="button"><?php echo $bouton1 ;?></button>
		   <?php endif; ?>
		   <?php if(isset($_SESSION['username'])): ?>
		   <br>
			<br>
			<h1><?php echo $titre ;?></h1>
		   <?php 
				$event = json_decode(file_get_contents('event.json'));
				$inc = 0;
				   	
				foreach($event->events as $i) {
			?>
						<br>
						<div class="row">
							<div class="col-sm-6 text-left">
								<h2><?php echo " $i->time | $i->title" ?></h2>
								<h4><span class="glyphicon glyphicon-bullhorn"></span><?php echo "  $i->description" ?></h4>
								<h4><span class="glyphicon glyphicon-map-marker"></span><?php echo "  $i->location" ?></h4>
								<h4><span class="glyphicon glyphicon-user"></span><?php echo "  $i->speaker" ?></h4>
								<h4><span class="glyphicon glyphicon-time"></span><?php echo "  $i->date | $i->time" ?></h4>
						
								<br>
								<br>
						
							</div>
							<div class="col-sm-6 text-left">
								<br>
								<br>
								 <?php if($_SESSION['admin']): ?>
									<br>
									<button class="btn btn-primary" data-toggle="modal" data-target="#event-modal" type="button"><?php echo $bouton2 ;?></button>
									<br>
									<br>
									<form action="deleteEvent.php?ind=<?php echo $inc ?>" method="post">
										<button class="btn btn-danger" type="button submit" ><?php echo $bouton3 ;?></button>
									</form>
									<?php ++$inc ?>
									<?php endif; ?>
							</div>
						</div>
									<?php
										}
									?>		
									<?php endif; ?>
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

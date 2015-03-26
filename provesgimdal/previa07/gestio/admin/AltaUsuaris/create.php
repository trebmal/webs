<?php 
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$nomError = null;
		$cognomsError = null;
		$emailError = null;
		$passwordError = null;
		$permisosError = null;
		
		// keep track post values
		$nom = $_POST['nom'];
		$cognoms = $_POST['cognoms'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$permisos = $_POST['permisos'];
		
	
		// validate input
		$valid = true;
		if (empty($nom)) {
			$nomError = 'Introdueix el Nom';
			$valid = false;
		}
		
		if (empty($cognoms)) {
			$cognomsError = 'Introdueix els Cognoms';
			$valid = false;
		}		
		
		if (empty($email)) {
			$emailError = 'Introdueix un Email correcte';
			$valid = false;
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$emailError = 'Introdueix un Email correcte';
			$valid = false;
		}
		
		if (empty($password)) {
			$password = 'Introdueix un Password';
			$valid = false;
		}
		

		if (empty($permisos)) {
			$permisosError = 'Introdueix els permisos';
			$valid = false;
		}




		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO usuaris (nom,cognoms,email,password,permisos) values(?, ?, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($nom,$cognoms,$email,$password,$permisos));
			Database::disconnect();
			header("Location: index.php");
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Creació Usuari</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="create.php" method="post">
					
					 
  					  <div class="control-group <?php echo !empty($nomError)?'error':'';?>">
					    <label class="control-label">Nom</label>
					    <div class="controls">
					      	<input name="nom" type="text"  placeholder="nom" value="<?php echo !empty($nom)?$nom:'';?>">
					      	<?php if (!empty($nomError)): ?>
					      		<span class="help-inline"><?php echo $nomError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					

					 <div class="control-group <?php echo !empty($cognomsError)?'error':'';?>">
					    <label class="control-label">cognom</label>
					    <div class="controls">
					      	<input name="cognoms" type="text"  placeholder="cognoms" value="<?php echo !empty($cognoms)?$cognoms:'';?>">
					      	<?php if (!empty($cognomsError)): ?>
					      		<span class="help-inline"><?php echo $cognomsError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div> 

					  <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
					    <label class="control-label">Email</label>
					    <div class="controls">
					      	<input name="email" type="text" placeholder="email" value="<?php echo !empty($email)?$email:'';?>">
					      	<?php if (!empty($emailError)): ?>
					      		<span class="help-inline"><?php echo $emailError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  


					  <div class="control-group <?php echo !empty($passwordError)?'error':'';?>">
					    <label class="control-label">Password </label>
					    <div class="controls">
					      	<input name="password" type="text" placeholder="password" value="<?php echo !empty($password)?$password:'';?>">
					      	<?php if (!empty($passwordError)): ?>
					      		<span class="help-inline"><?php echo $passwordError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>




					  <div class="control-group <?php echo !empty($permisosError)?'error':'';?>">
					    <label class="control-label">Permisos</label>
					    <div class="controls">
					      	<input name="permisos" type="text"  maxlength="2" placeholder="permisos" value="<?php echo !empty($permisos)?$permisos:'';?>">
					      	<?php if (!empty($permisosError)): ?>
					      		<span class="help-inline"><?php echo $permisosError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					 



					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Crear</button>
						  <a class="btn" href="index.php">Tornar</a>
						</div>
					


					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>
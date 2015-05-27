<?php 
	
	require 'database.php';

	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: index.php");
	}
	
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
			$nomError = 'Introdueix nom';
			$valid = false;
		}
		
		if (empty($cognoms)) {
			$cognomsError = 'Introdueix cognoms';
			$valid = false;
		}

		if (empty($email)) {
			$emailError = 'Please enter Email Address';
			$valid = false;
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$emailError = 'Please enter a valid Email Address';
			$valid = false;
		}
		
		if (empty($password)) {
			$passwordError = 'Introdueix password';
			$valid = false;
		}


		if (empty($permisos)) {
			$permisosError = 'Introdueix permisos';
			$valid = false;
		}
		
		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE usuaris  set nom = ?, cognoms = ?, email = ?, password = ?, permisos =? WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($nom,$cognoms,$email,$password,$permisos,$id));
			Database::disconnect();
			header("Location: index.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM usuaris where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$nom = $data['nom'];
		$cognoms = $data['cognoms'];
		$email = $data['email'];
		$password = $data['password'];
		$permisos = $data['permisos'];
		Database::disconnect();
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
		    			<h3>Update a Customer</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
					 

					  <div class="control-group <?php echo !empty($nomError)?'error':'';?>">
					    <label class="control-label">nom</label>
					    <div class="controls">
					      	<input name="nom" type="text"  maxlength="20" placeholder="nom" value="<?php echo !empty($nom)?$nom:'';?>">
					      	<?php if (!empty($nomError)): ?>
					      		<span class="help-inline"><?php echo $nomError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					 
					  <div class="control-group <?php echo !empty($cognomsError)?'error':'';?>">
					    <label class="control-label">cognoms</label>
					    <div class="controls">
					      	<input name="cognoms" type="text"  placeholder="cognoms" value="<?php echo !empty($cognoms)?$cognoms:'';?>">
					      	<?php if (!empty($cognomsError)): ?>
					      		<span class="help-inline"><?php echo $cognomsError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>

					  <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
					    <label class="control-label">Email Address</label>
					    <div class="controls">
					      	<input name="email" type="text" placeholder="Email" value="<?php echo !empty($email)?$email:'';?>">
					      	<?php if (!empty($emailError)): ?>
					      		<span class="help-inline"><?php echo $emailError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					 
					 <div class="control-group <?php echo !empty($passwordError)?'error':'';?>">
					    <label class="control-label">password</label>
					    <div class="controls">
					      	<input name="password" type="text"  placeholder="password" value="<?php echo !empty($password)?$password:'';?>">
					      	<?php if (!empty($passwordError)): ?>
					      		<span class="help-inline"><?php echo $passwordError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>


					  <div class="control-group <?php echo !empty($permisosError)?'error':'';?>">
					    <label class="control-label">permisos Number</label>
					    <div class="controls">
					      	<input name="permisos" type="text" maxlength="2" placeholder="permisos" value="<?php echo !empty($permisos)?$permisos:'';?>">
					      	<?php if (!empty($permisosError)): ?>
					      		<span class="help-inline"><?php echo $permisosError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					 




					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Actualitzar</button>
						  <a class="btn" href="index.php">Tornar </a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>
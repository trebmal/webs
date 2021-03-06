<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" type="text/css" href="css/estilo-login.css" media="screen"/>    
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script> 
    <script src="js/validarFormularios.js" type="text/javascript"></script> 
    
    <title>Registro</title>
</head>

<body>
    
    <?php
        require_once 'controlador/config.php';
        require 'modelo/usuario.php';
        require 'controlador/GestorUsuarios.php';
        
        // Inicializamos las varibles que se usaran para los campos de texto del formulario.
        $nom="";
        $cognoms="";
        $usuari="";
        $email="";
        $password="";
        $password2="";
        $pass="";
        $permisos="";

        if(isset($_POST['registrar'])){             
            $conexion = new mysqli($servidor, $usuarioBD, $passwordBD, $baseDatos);
            $nuevoUsuario = new Usuario($_POST['nom'],$_POST['cognoms'],$_POST['usuari'],$_POST['email'],$_POST['password'],$_POST['password2'],$_POST['pass'],$_POST['permisos']);
            $gestor = new GestorUsuarios($conexion);    
            
            // Si todos los campos del usuario son correctos y se realiza la insercion del usuario con exito
            // se redireciona a la pagina correspondiente.
            if (($gestor->validarUsuario($nuevoUsuario)) && ($gestor->insertarUsuario($nuevoUsuario))) {
                $conexion->close();
                header("Location:formulario_login.php");
            }
            else{
                // Si algo falla se recuperan los datos introducidos por el usuario
                // para que no tenga que reescribir los que estuviesen correctos.
                $nom=$_POST['nom'];
                $cognoms=$_POST['cognoms'];
                $usuari=$_POST['usuari'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $password2=$_POST['password2']; 
                $pass=$_POST['pass'];
                $permisos=$_POST['permisos']; 
            }
        }
    ?>

    <section>
        <div id="formulario_registro">

            <h2>Formulario registro</h2>
            <form action="#" method=POST>
                <div class="campoFormulario">
                    <label for="nom">nom: <span class="obligatorio">*</span></label>
                    <input type='text' id="nom" name="nom" maxlength="15" value="<?php echo $nom ?>" onblur="return validarNom(this.value)" autocomplete="off"/>
                </div>
                <div class="campoFormulario">
                    <label for="cognoms">Contraseña: <span class="obligatorio">*</span></label>
                    <input type='text' id="cognoms" name="cognoms" maxlength="20" value="<?php echo $cognoms ?>" onblur="return validarCognoms(this.value)" autocomplete="off"/>
                </div>
                <div class="campoFormulario">
                    <label for="usuari">Repita la Contraseña: <span class="obligatorio">*</span></label>
                    <input type='text' id="usuari" name="usuari" maxlength="20" value="<?php echo $usuari ?>" onblur="return validarUsuari(this.value)"/>
                </div>
                <div class="campoFormulario">
                    <label for="email">Email: <span class="obligatorio">*</span></label>
                    <input type='text' id="email" name="email" maxlength="30" value="<?php echo $email ?>" onblur="return validarEmail(this.value)"/>
                </div>
                <div class="campoFormulario">
                    <label for="password">Nombre:</label>
                    <input type='password' id="nombre" name="nombre" maxlength="20" value="<?php echo $nombre ?>" onblur="return validarPassword(this.value)"/>
                </div>
                <div class="campoFormulario">
                    <label for="password2">Apellidos:</label>
                    <input type='text' id="apellidos" name="apellidos" maxlength="30" value="<?php echo $apellidos ?>" onblur="return validarPasswordIguales(password.value,this.value)"/>
                </div>
                <div class="campoFormulario">
                    <label for="pass">Edad:</label>
                    <input type='text' id="pass" name="pass" maxlength="30" value="<?php echo $pass ?>" onblur="return validarPass(this.value)"/>
                </div>
                <div class="campoFormulario">
                    <label for="permisos">permisos: <span class="obligatorio">*</span></label>
                    <input type='text' id="permisos" name="permisos" maxlength="9" value="<?php echo $permisos ?>" onblur="return validarPermisos(this.value)"/>
                </div>


                <div class="botonFormulario">
                    <input type="submit" id="registrar" name="registrar" value="Registrarse">
                </div>  
            </form> 
        </div>
    </section>
</body>
</html>
<?php
/*    
    Tanca sessio i porta de nou a la pagina de login
*/
 
session_start();
// Destruye todas las variables de la sesion
session_unset();
// Finalmente, destruye la sesion
session_destroy();
 
//Redireccionar a la pagina de login
header ("Location: index.php");
 
?>
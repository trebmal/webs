<?php

session_start();


if(isset ($_SESSION['permisos'])){

$permisos = $_SESSION['permisos'];

switch ($permisos) {

    case "00":
        echo "No tens permisos";
        header("Location: ../index.php");
        break;

    case "01":
        echo "Totals";
        break;

    case "02":
        echo "Lectura";
        break;

    case "03":
        echo "Especial";
       header("Location: menus/m_admin.php");
        break;

    case "04":
        echo "vendes";
        header("Location: gestio/menus/vendes.php");
        break;


    default:
        echo "Your favorite color is neither red, blue, or green!";
}


} else {
       //no es troba torna al index
     //   mysqli_close($con);
        header("Location: ../../index.php");
    }


?>

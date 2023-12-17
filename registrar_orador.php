<?php
require 'conexion.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST)&&!empty($_POST)){
        $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
        $apellido=mysqli_real_escape_string($conexion,$_POST['apellido']);    
        $mail=mysqli_real_escape_string($conexion,$_POST['mail']);
        $tema=mysqli_real_escape_string($conexion,$_POST['tema']);
        $fechaActual = date("Y-m-d");
                               
        $consulta_sql = "INSERT INTO oradores (nombre, apellido, mail, tema, fecha_alta) VALUES ('$nombre', '$apellido','$mail','$tema','$fechaActual')";
        $resultado = mysqli_query($conexion, $consulta_sql); 
        if($resultado){
            $mensaje= "Orador registrado con exito";
            
        }else{
            $mensaje="No se pudieron registrar los datos";
        }
        /*
        echo "<script> var mensaje = '$mensaje'; alert('!!, ' + mensaje); </script>";
        if (isset($_SERVER["HTTP_REFERER"])) {
            $pagina_solicitante = $_SERVER["HTTP_REFERER"];
            header("Location: $pagina_solicitante");
        } else {
            header("Location: index.php"); 
        }
        exit;
        */

        echo "<script> var mensaje = '$mensaje'; alert(mensaje +'!!'); </script>";

        // Despues de confirmar redirige a la pagina desde donde se solicito el script
        if (isset($_SERVER["HTTP_REFERER"])) {
            $pagina_solicitante = $_SERVER["HTTP_REFERER"];
            if (strpos($pagina_solicitante,'registrar_orador.php')!=false);
            echo "<script> window.location.href = 'admin.php'; </script>";
        } else {
            echo "<script> window.location.href = 'index.php'; </script>";
        }
        exit;
    }
}

?>

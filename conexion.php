<?php
    $bdhost="localhost";
    $bdusuario="id21685352_root";
    $bdpass="L0uJu@6u@";
    $bdnombre="id21685352_integrador_cac";

    $conexion = mysqli_connect($bdhost,$bdusuario,$bdpass,$bdnombre);
        // Verifica la conexión
    if(mysqli_connect_errno()){
        //die("Conexión a la base de datos falló: " . $this->conexion->connect_error);
        echo "<br>Error al conectar a la base de datos ".mysqli_connect_errno();
    }
    else{
            //echo "<br>Conexion establecida<br>";
    } 



?>
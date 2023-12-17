<?php
    session_start(); 
    if(!isset($_SESSION["usuario"])){
        header('location:index.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel="stylesheet" href="css/tp.css">
    <script src="https://kit.fontawesome.com/5f0fa01923.js" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column min-vh-100">

   <?php include 'pages/header_admin.php'; ?>
    
    <main class="container flex-grow-1">
        <div>
            <h2>Bienvenido <?php echo $_SESSION["usuario"]?></h2>
            <a href="agregar_orador.php" class="btn btn-success">Agregar Orador</a>
        </div>
        <div id="divListadoOradores">
            <h3>Oradores registrados</h3>
            <?php include 'listado.php'; ?>
        </div>
    </main>
 


  

        
    <!-- Archivo javascript script.js -->
    <script src="js/script.js"></script>
    <!-- Boostrap Javascript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
    
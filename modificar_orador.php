<?php
require 'conexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
else if( ($_SERVER['REQUEST_METHOD']!='POST')&&($_SERVER['REQUEST_METHOD']!='GET')){
    header("location:admin.php");
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
</head>
<body class="d-flex flex-column min-vh-100">

   <?php include 'pages/header_admin.php'; ?>
    
    <main class="container flex-grow-1">
        <div>
            <h3>Modificar Datos de Orador</h3>
        </div>
        <div>
            <div class="container">
                <?php
                    
                    if(isset($_POST)&&!empty($_POST)){
                        $id=$_POST['id'];
                        $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
                        $apellido=mysqli_real_escape_string($conexion,$_POST['apellido']);    
                        $mail=mysqli_real_escape_string($conexion,$_POST['mail']);
                        $tema=mysqli_real_escape_string($conexion,$_POST['tema']);
                                                
                        $consulta_sql = "UPDATE oradores SET nombre='$nombre', apellido='$apellido', mail='$mail', tema='$tema' where id_orador=$id";
                        $resultado = mysqli_query($conexion,$consulta_sql);
					    if($resultado){
						    $message= "Datos actualizados con éxito";
						    $class="alert alert-success";
						
					    }else{
						    $message="No se pudieron actualizar los datos";
						    $class="alert alert-danger";
					    }
					
					?>
                    <div class="<?php echo $class?>">
				        <?php echo $message;?>
				    </div>	
				<?php
				}
				$consulta_sql = "SELECT * FROM oradores where id_orador=$id";
                $resultado = mysqli_query($conexion,$consulta_sql);
                $dato_orador=mysqli_fetch_assoc($resultado);
			?>
                <form id="formularioOradores" action="modificar_orador.php" method="post">
                <div class="row g-3 mb-3"> 
                <div class="row">
                    <div class="mb-3">      
                    <input type="hidden" name="id" id="id" class='form-control' maxlength="100" value="<?php echo $dato_orador['id_orador'];?>">  
                    </div>
                </div>
                    <div class="col-md-6"> 
                    <input type="text" class="form-control" id="inputOradorNombre" name="nombre" value="<?php echo $dato_orador['nombre'];?>">
                    </div>
                    <div class="col-md-6">
                    <input type="text" class="form-control" id="inputOradorApellido" name="apellido" value="<?php echo $dato_orador['apellido']?>">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">      
                    <input type="mail" class="form-control" id="inputOradorMail" name="mail" value="<?php echo $dato_orador['mail']?>">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">      
                    <textarea class="form-control" id="inputOradorTema" rows="3" name="tema"><?php echo $dato_orador['tema']?></textarea>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3"> 
                    <button class="btn btn-primary w-100 botonVerde" type="submit">Actualizar</button>          
                    </div>
                    <div class="col-md-6 mb-3"> 
                    <a href="Admin.php" class="btn btn-primary w-100 botonVerde">Volver al Listado</a>          
                    </div>
                </div>
                </form>
            </div>
            </div>
    </main>
 


  

        
    <!-- Archivo javascript script.js -->
    <script src="js/script.js"></script>
    <!-- Boostrap Javascript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
    
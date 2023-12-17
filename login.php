<?php
    if(isset($_POST["login"])){
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        if($usuario=="sergou" && $password=="12345"){
            session_start();
            $_SESSION["usuario"]=$usuario;
            header("Location: admin.php");
        }
        else{
            $error="Credenciales Incorrectas";
        }
    }
    else{
        $error="------";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>TP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel="stylesheet" href="css/tp.css">
</head>
<body>


    <div class="d-md-flex" id="divLoginPrincipal">
        <div class="bg-dark" id="divLoginLateral">
            <div id="divLoginLogo">
                <img id="loginLogocac" src="img/codoacodo.png" alt="LogoCodoaCodo">
            </div>
            <!-- <div id="divLoginOpciones">            
              <a class="nav-link active" aria-current="page" href="index.php">Index</a>
              <a class="nav-link text-success" href="ticket.php">Comprar Tickets</a>
            </div> -->              
        </div>
        <div id="divLoginCentral">
            <div class="container-flex" id="divLoginContenido">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 border border-success mx-auto" id="divLoginFormFull">
                        <div class="text-center mb-5">
                            <h3>Login<strong>Admin</strong></h3>
                        </div>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="usuarioLogin">Usuario</label>
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuarioLogin">
                            </div>
                            <div class="form-group mb-3">
                                <label for="passwordLogin">Contraseña</label>
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="passwordLogin">
                            </div>
                            <div id="areaBotonLogIn">
                                <input type="submit" value="Log In" class="btn btn-block btn-primary" name="login" id="btnLogIn">
                            </div>                            
                        </form>                                                
                    </div> <!-- col  divLoginFormFull-->
                </div> <!-- row -->
                <div id="divLoginMensaje">
                <?php echo $error; ?>
            </div>
            </div>   <!-- container -->            
        </div> <!-- divloginCentral -->
    </div>
        
    <!-- Archivo javascript script.js -->
    <script src="js/script.js"></script>
    <!-- Boostrap Javascript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
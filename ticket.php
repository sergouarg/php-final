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
  <!------------------------------ Inicio Barra Navegacion --------------------------- -->    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <?php include 'pages/opciones_menu.php'; ?>
  </nav>
  <!-----------------------------------Fin Barra Navegacion ------------------------------>
   
  <!----------------------------- Inicio del container areaTicket --------------------------> 
  <div class="container" id="areaTicket">
   
    <div class="row row-cols-1 row-cols-md-3 g-1">
      <div class="col">
        <div class="card h-100 ticket" id="ticket1">
          <div class="card-body textoCard">
            <p class="ticket-titulo">Estudiante</p>
            <p class="ticket-texto">Tienen un descuento</p>
            <p class="ticket-descuento">80%</p>
            <p class="ticket-nota">* presentar documentación</p>
          </div>            
        </div>
      </div>

      <div class="col">

        <div class="card h-100 ticket" id="ticket2">
          <div class="card-body textoCard">
            <p class="ticket-titulo">Trainee</p>
            <p class="ticket-texto">Tienen un descuento</p>
            <p class="ticket-descuento">50%</p>
            <p class="ticket-nota">* presentar documentación</p>
          </div>            
        </div>  
      </div>

      <div class="col">
        <div class="card h-100 ticket" id="ticket3">
          <div class="card-body textoCard">
            <p class="ticket-titulo">Junior</p>
            <p class="ticket-texto">Tienen un descuento</p>
            <p class="ticket-descuento">15%</p>
            <p class="ticket-nota">* presentar documentación</p>
          </div>            
        </div>
      </div>

    </div> <!-- fin class row -->
    
  </div> <!-- fin areaTicket  -->           
  <!--------------------------- fin del container areaTicket ---------------------> 

  <!--------------------------- Inicio Formulario ---------------------------------->
  <div class="container" id="areaFormularioTicket">
    <p id="p-titulo" class="mb-4">VENTA<br><span id="letra-grande" class="letraGrande">VALOR DE TICKET $200</span></p> 

    <div class="row g-3 mb-3"> 
      <div class="col-md-6">      
        <input type="text" class="form-control" name="nombre" id="input_nombre" placeholder="Nombre" required>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="apellido" id="input_apellido" placeholder="Apellido" required>
      </div>
    </div>

    <div class="row">
      <div class="mb-3">      
        <input type="email" class="form-control" name="email" id="input_email" placeholder="Correo" required>     
      </div>
    </div>

    <div class="row g-3 mb-3"> 
      <div class="col-md-6">  
        <p>Cantidad</p>    
        <input type="number" class="form-control" id="input_cantidad" placeholder="Cantidad" required>
      </div>
      <div class="col-md-6">
        <p>Categoría</p>
        <select class="form-select form-select-sm mb-3" id="select_categoria" aria-label=".form-select-lg example">
          <option value="1" selected>Estudiante</option>
          <option value="2">Trainee</option>
          <option value="3">Junior</option>
          <option value="4">General</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="mb-3">      
        <div id="caja_informacion">
          Total a pagar: $
        </div>
      </div>
    </div>

    <div class="row g-4 mb-3">
      <div class="col-md-6 mb-3"> 
        <button class="btn btn-primary w-100" type="button" id="BotonBorrarForm">Borrar</button>          
      </div>
      <div class="col-md-6 mb-3"> 
        <button class="btn btn-primary w-100" type="button" id="BotonResumenForm">Resumen</button>          
      </div>
    </div>  

  </div>
  <!--------------------------- Fin Formulario ---------------------------------->

  <!--------------------------- Inicio Footer -------------------------------->
  <footer class="d-flex align-items-center">
    <div class="container" id="divFooter">
      <ul class="nav d-flex justify-content-around align-items-center" id="listaNavFooter">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Preguntas<br>frecuentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contáctanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Prensa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Conferencias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Términos y<br>condiciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Privacidad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estudiantes</a>
        </li>
      </ul>
      
    </div>
    <div id="divFooter2">
      <ul class="" id="listaFooter2">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Preguntas frecuentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contáctanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Prensa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Conferencias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Términos y condiciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Privacidad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estudiantes</a>
        </li>
      </ul>
    </div>
  </footer>

  <!--------------------------- Fin Footer ---------------------------------->

        
  <!-- Archivo javascript script.js -->
    <script src="js/script.js"></script>
    <!-- Boostrap Javascript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
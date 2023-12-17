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

  <!-- ---------------------------------Inicio Carousel ------------------------------------>
  <div class="carrusel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/ba1_oscuro.jpg" class="full-viewport-img" alt="..." >          
        </div>
        <div class="carousel-item">
          <img src="img/ba2_oscuro.jpg" class="full-viewport-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/ba3_oscuro.jpg" class="full-viewport-img" alt="...">
        </div>
      </div>
      <div class="carousel-caption d-none d-md-block" id="CaptionCarrusel"> 
        <h5>Conf Bs As</h5>
        <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que estan creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de codo a codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
        <a href="#areaFormulario" class="btn btn-outline-secondary" id="botonQuiero">Quiero ser orador</a>
        <a href="ticket.php" class="btn btn-success" id="botonTicket">Comprar tickets</a>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
    <!--------------------------------- Fin Carousel --------------------------------->

   
  <!----------------------------- Inicio del container cards --------------------------> 
  <div class="container" id="areaCards">
    <p>CONOCE A LOS<br><span class="letraGrande">ORADORES</span></p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="img/jobs.jpg" class="card-img-top" alt="Steve Jobs">
          <div class="card-body botonCard">
            <button type="button" class="btn btn-warning btn-sm fw-bold">JavaScript</button>
            <button type="button" class="btn btn-primary btn-sm fw-bold">React</button>
          </div>
          <div class="card-body textoCard">
            <h5 class="card-title">Steve Jobs</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur ex excepturi libero, esse ipsam sapiente ab quas dolore molestias magni? Necessitatibus consectetur praesentium excepturi aliquid ipsa cupiditate rerum sed sapiente..</p>
          </div>            
        </div>
      </div>

      <div class="col">
        <div class="card h-100">            
          <img src="img//bill.jpg" class="card-img-top" alt="Bill Gates">
          <div class="card-body botonCard">
            <button type="button" class="btn btn-warning btn-sm fw-bold">JavaScript</button>
            <button type="button" class="btn btn-primary btn-sm fw-bold">React</button>
          </div>
          <div class="card-body textoCard">
            <h5 class="card-title">Bill Gates</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur ex excepturi libero, esse ipsam sapiente ab quas dolore molestias magni? Necessitatibus consectetur praesentium excepturi aliquid ipsa cupiditate rerum sed sapiente..</p>
          </div>
          
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/ada.jpeg" class="card-img-top" alt="Ada Lovelace">
          <div class="card-body botonCard">
            <button type="button" class="btn btn-secondary btn-sm fw-bold">Negocios</button>
            <button type="button" class="btn btn-danger btn-sm fw-bold">Startups</button>
          </div>          
          <div class="card-body textoCard">
            <h5 class="card-title">Ada Lovelace</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur ex excepturi libero, esse ipsam sapiente ab quas dolore molestias magni? Necessitatibus consectetur praesentium excepturi aliquid ipsa cupiditate rerum sed sapiente..</p>
          </div>            
        </div>
      </div>
    </div>
  </div>          
  <!---------------------------------- fin del container cards -------------------------------> 

  <!----------------------------------- Inicio Imagen dos columnas ---------------------------->
  <div class="container-fluid" id="dosColumnas">
    <div class="card mb-3" >
      <div class="row g-0">
        <div class="col-md-6">
          <img src="img/ba3.jpg" class="img-fluid" alt="Buenos Aires">
        </div>
        <div class="col-md-6 text-white bg-dark">
          <div class="card-body">
            <h5 class="card-title">Bs As - Octubre</h5>
            <p class="card-text">Buenos Aires es la capital y la ciudad más grande de Argentina, ubicada en la costa este del país, a orillas del Río de la Plata. Es conocida por su rica cultura, arquitectura impresionante, vibrante escena artística, una pasión por el tango y una gastronomía excepcional. Buenos Aires es también un importante centro económico y político de América del Sur, con una mezcla de tradición y modernidad que la hace única. Sus barrios distintivos, como La Boca, San Telmo, Palermo y Recoleta, ofrecen una amplia variedad de experiencias culturales y turísticas.</p>
            <button type="button" class="btn btn-outline-light">Conocé más</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------ Fin imagen dos columnas ---------------------------->

  <!--------------------------- Inicio Formulario ---------------------------------->
  <div class="container" id="areaFormulario">
    <p class="mb-4">CONVIÉRTETE EN UN<br><span class="letraGrande">ORADOR</span></p> 
    <p>Anótate como orador para dar una <span id="charlaignite">charla ignite</span>. Cuéntanos de qué quieres hablar!</p>  
    <form id="formularioOradores" action="registrar_orador.php" method="post">
      <div class="row g-3 mb-3"> 
        <div class="col-md-6">      
          <input type="text" class="form-control" id="inputOradorNombre" placeholder="Nombre" name="nombre" required>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="inputOradorApellido" placeholder="Apellido" name="apellido" required>
        </div>
      </div>
      <div class="row">
        <div class="mb-3">      
          <input type="mail" class="form-control" id="inputOradorEmail" placeholder="Email@email.com" name="mail" required> 
        </div>
      </div>
      <div class="row">
        <div class="mb-3">      
          <textarea class="form-control" id="inputOradorTema" placeholder="Sobre qué quieres hablar?" rows="3" name="tema" required></textarea>    
          <p id="mensaje">Recuerda incluir un título para tu charla</p>   
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3"> 
          <button class="btn btn-primary w-100" type="button" id="btnEnviarOrador">Enviar</button>          
        </div>
      </div>
    </form>
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
<?php 
//   session_start(); 
  if(!isset($_SESSION["usuario"])){
      header('location:index.php');
      exit();
  }

require 'conexion.php';
$consulta_sql = 'SELECT * FROM oradores';
$resultado = mysqli_query($conexion,$consulta_sql);
$listado = mysqli_fetch_all($resultado,MYSQLI_ASSOC); 

// Verificamos si hay datos en la lista de oradores
if (!empty($listado)) {

    ?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Mail</th>
            <th scope="col">Tema</th>
            <th scope="col">Fecha Alta</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listado as $orador) {
            $id=$orador['id_orador'];
            $nombres=$orador['nombre']." ".$orador['apellido'];
            $mail=$orador['mail'];
            $tema=$orador['tema'];
            $fecha_alta=$orador['fecha_alta'];
        ?>
            <tr>
                <th scope="row"><?php echo $id;?></th>
                <td><?php echo $nombres;?></td>
                <td><?php echo $mail;?></td>
                <td><?php echo $tema;?></td>
                <td><?php echo $fecha_alta;?></td>
                <td>
                    <a href="modificar_orador.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="fa-regular fa-pen-to-square"></i></a>
                </td>
                <td>
                    <!-- <a href="eliminar_orador.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="fa-solid fa-trash-can"></i></a> -->
                    <a href="#" onclick="confirmarEliminar('<?php echo $id; ?>');"class="delete" title="Eliminar" data-toggle="tooltip"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
        </tbody>
        <script>
            function confirmarEliminar(id) {
                var confirmacion = confirm("¿Estás seguro de que quieres eliminar este orador?");
                if (confirmacion==true) {
                    // Si el usuario confirma, redirige a la página de eliminación
                    window.location.href = 'eliminar_orador.php?id=' + id;
                } else {
                    // Si el usuario cancela, no hace nada
                }
            }
        </script>
        <?php
        }
    } 
    else
    {
        echo "No se encontraron oradores.";
    }
?>
    
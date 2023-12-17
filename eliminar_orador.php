<?php 
if (isset($_GET['id'])){
	
	require 'conexion.php';

	$id=intval($_GET['id']);
	$consulta_sql = "DELETE FROM oradores where id_orador=$id";
    $resultado = mysqli_query($conexion,$consulta_sql);
	if($resultado){
		header('location: admin.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>
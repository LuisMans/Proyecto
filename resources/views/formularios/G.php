<!-- Archivo Para Registrar Inputs -->
<?php
include 'c.php';

$Marca =$_POST['marcas'];
$Modelo =$_POST['modelos'];
$Año =$_POST['anio'];
$Estado =$_POST['estado'];
$Pais =$_POST['pais'];
$Placas =$_POST['placas'];
$Tipo =$_POST['tipo'];

$tamaño = sizeof($Marca);

for ($i=0; $i < $tamaño; $i++) { 
	$insertar = "INSERT INTO autos (Marca,Modelo,Año,Estado,Pais,Placas,Tipo) 
	VALUES(
	'".$Marca[$i]."',
	'".$Modelo[$i]."',
	'".$Año[$i]."',
	'".$Estado[$i]."', 
	'".$Pais[$i]."',
	'".$Placas[$i]."',
	'".$Tipo[$i]."'
)";
	
	$query = mysqli_query($conexion, $insertar);
}

if($query){
	echo "<script> alert ('Registro Exitoso'); window.location='contacto'</script>";
}else{
	echo "<script> alert ('Coneccion incorrecta'); </script>";
}

?>
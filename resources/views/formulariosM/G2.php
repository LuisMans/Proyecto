<!-- Archivo Para Registrar Inputs -->
<?php
include 'c.php';

$Tipo =$_POST['tipos'];
$Nombre =$_POST['nombres'];
$Pedi =$_POST['pedigrees'];
$Chip =$_POST['chips'];
$Cartilla =$_POST['cartillas'];


$tamaño = sizeof($Tipo);

for ($i=0; $i < $tamaño; $i++) { 
	$insertar = "INSERT INTO mascotas (Tipo,Nombre,Pedigree,Chip,Cartilla) 
	VALUES(
	'".$Tipo[$i]."',
	'".$Nombre[$i]."',
	'".$Pedi[$i]."',
	'".$Chip[$i]."', 
	'".$Cartilla[$i]."'
)";
	
	$query = mysqli_query($conexion, $insertar);
}

if($query){
	echo "<script> alert ('Registro Exitoso'); window.location='mascota'</script>";
}else{
	echo "<script> alert ('Coneccion incorrecta'); </script>";
}

?>
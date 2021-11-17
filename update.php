<?php
//Cesar Melchor Alfaro 5J
include("conexion.php");
$con=conectar();

$IDarticulo=$_POST['IDarticulo'];
$Nombre=$_POST['Nombre'];
$Clasificacion=$_POST['Clasificacion'];
$Marca=$_POST['Marca'];
$Estilo=$_POST['Estilo'];

$sql="UPDATE articulos
SET  Nombre='$Nombre',Clasificacion='$Clasificacion',Marca='$Marca',Estilo='$Estilo' 
WHERE IDarticulo='$IDarticulo'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>

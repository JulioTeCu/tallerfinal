<?php
include ('conexion.php');

$noserie = $_POST["noserie"];
$propietario = $_POST["propietario"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$id_modificacion = $_POST["modificacion"];  
$id_refaccion = $_POST["refaccion"];

try {

$insertar = "INSERT INTO autos (noserie, propietario, marca, modelo, id_modificacion, id_refaccion) 
VALUES (:noserie,:propietario,:marca,:modelo,:id_modificacion,:id_refaccion)";
$resultado=$conexion->prepare($insertar);
$resultado->execute(array(":noserie"=>$noserie,":propietario"=>$propietario,
":marca"=>$marca,":modelo"=>$modelo,":id_modificacion"=>$id_modificacion,":id_refaccion"=>$id_refaccion));

echo "registro insertado";
echo '<script>
alert("Auto registrado con exito");
window.history.go(-1);
</script>';
$resultado->closecursor();
}
catch (PDOException $pe){
    die ("Error al registrar $bd :" . $pe->getMessage());
    }
    
?>
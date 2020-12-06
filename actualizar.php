<?php
include ('conexion.php');

$ID = $_POST['ID'];
$noserie = $_POST['noserie'];
$propietario = $_POST['propietario'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$id_modificacion = $_POST['modificacion'];
$id_refaccion = $_POST['refaccion'];

try{
    $actualizar = "UPDATE autos SET noserie=:noserie,propietario=:propietario,marca=:marca,modelo=:modelo,
    id_modificacion=:id_modificacion,id_refaccion=:id_refaccion WHERE ID = :ID";
    $resultado=$conexion->prepare($actualizar);
    $resultado->execute(array(":ID"=>$ID,":noserie"=>$noserie,":propietario"=>$propietario,":marca"=>$marca,
    ":modelo"=>$modelo,":id_modificacion"=>$id_modificacion,":id_refaccion"=>$id_refaccion));
    echo '<script>
alert("Registro actualizado");
window.history.go(-1);
</script>';
    $resultado->closecursor();
    }
    catch (PDOException $pe){
        die ("Error al actualizar $bd :" . $pe->getMessage());
    }
?>

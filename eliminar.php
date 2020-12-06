<?php
include ('conexion.php');

$ID = $_POST['ID'];
$propietario = $_POST['propietario'];

try{
$eliminar ="DELETE FROM autos WHERE (ID = :ID) AND (propietario = :propietario)";
$resultado=$conexion->prepare($eliminar);
$resultado->execute(array(":ID"=>$ID,":propietario"=>$propietario));
echo '<script>
alert("Registro eliminado");
window.history.go(-1);
</script>';
}

catch (PDOException $pe){
    die ("Error al eliminar $bd :" . $pe->getMessage());
    }
?>
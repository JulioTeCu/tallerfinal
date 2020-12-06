<?php

include ('conexion.php');
$ID = $_POST["ID"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>BUSCAR</title>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="buscar.css">
</head>
<body>
<h1>Tabla de datos</h1>
<div class="container-table">
    <div class="table__title">DATOS</div>
    <div class="table__header">ID</div>
    <div class="table__header">No_SERIE</div>
    <div class="table__header">PROPIETARIO</div>
    <div class="table__header">MARCA</div>
    <div class="table__header">MODELO</div>
    <div class="table__header">ID_MODIFIACIÓN</div>
    <div class="table__header">ID_REFACCIÓN</div>
<?php
try{
    $sql="SELECT * FROM autos WHERE ID = :ID";
    $resultado=$conexion->prepare($sql);
    $resultado->execute(array(":ID"=>$ID));

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){ ?>
    <div class="table__item"><?php echo $registro["ID"]; ?></div>
    <div class="table__item"><?php echo $registro["noserie"]; ?></div>
    <div class="table__item"><?php echo $registro["propietario"]; ?></div>
    <div class="table__item"><?php echo $registro["marca"]; ?></div>
    <div class="table__item"><?php echo $registro["modelo"]; ?></div>
    <div class="table__item"><?php echo $registro["id_modificacion"]; ?></div>
    <div class="table__item"><?php echo $registro["id_refaccion"]; ?></div>
    <?php
       
    }

    $resultado->closeCursor();
}catch(Exception $e){
    die('Error' . $e->GetMessage());
}   

?>
</div>
<form class="form-botones">
   
<a href="buscar.html" class="boton">Regresar</a>

</form>
</body>
</html>


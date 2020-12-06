<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>MODIFICACIONES</title>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="modificaciones.css">
</head>
<body>
<h1>Tabla de datos</h1>

<div class="container-table">
    <div class="table__title">DATOS</div>
    <div class="table__header">ID</div>
    <div class="table__header">ESTILOS</div>
    <div class="table__header">COLOR</div>
    <div class="table__header">ALERÓN</div>
    <div class="table__header">CARROCERÍA</div>
    <div class="table__header">COSTO</div>
    <?php 
    try{
        $sql="SELECT * FROM modificaciones";
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array());

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) { ?>
  
    <div class="table__item"><?php echo $registro["ID"]; ?></div>
    <div class="table__item"><?php echo $registro["estilos"]; ?></div>
    <div class="table__item"><?php echo $registro["color"]; ?></div>
    <div class="table__item"><?php echo $registro["aleron"]; ?></div>
    <div class="table__item"><?php echo $registro["carroceria"]; ?></div>
    <div class="table__item"><?php echo $registro["costo"]; ?></div>
    <?php 
    }
    $resultado->closeCursor();
}catch(Exception $e){
    die('Error' . $e->GetMessage());
}
?>
</div>
</body>
</html>
<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>REFACCIONES</title>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="refacciones.css">
</head>
<body>
<h1>Tabla de datos</h1>

<div class="container-table">
    <div class="table__title">DATOS</div>
    <div class="table__header">ID</div>
    <div class="table__header">REFACCIÓN</div>
    <div class="table__header">PROVEEDOR</div>
    <div class="table__header">COSTO</div>
    <?php 
    try{
        $sql = "SELECT * FROM refacciones";
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array());

    while($registro = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
  
    <div class="table__item"><?php echo $registro["ID"]; ?></div>
    <div class="table__item"><?php echo $registro["refaccion"]; ?></div>
    <div class="table__item"><?php echo $registro["proveedor"]; ?></div>
    <div class="table__item"><?php echo $registro["costo"]; ?></div>
    <?php 
    }
    $resultado->closeCursor();
    }catch(Exception $e){
        die ('Error' . $e->GetMessage());
    }
    ?>
</div>
</body>
</html>
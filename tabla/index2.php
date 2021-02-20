<?php
$conexion=mysqli_connect('localhost','root','','compra');
?>


<!DOCTYPE html>
<html>
<head>
    <title>compra</title>
    <link rel="stylesheet" href="Tabla.css">
</head>
<body>
<br>
<div class="texto">
    <h1>Esto es una tabla sql que representa mi lista de la compra</h1>
<div> 
    
<div class="tabla">
    <table border="1">
        
    <tr>
        <td>Item</td>
        <td>cantidad</td>
        <td>Precio</td>
        <td>Fecha</td>
    </tr>
    <?php
    $sql="SELECT * FROM compra";
    $result=mysqli_query($conexion,$sql);
   
    
    while($mostrar=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $mostrar['Item'] ?></td>
        <td><?php echo $mostrar['cantidad'] ?></td>
        <td><?php echo $mostrar['Precio'] ?></td>
        <td><?php echo $mostrar['Fecha'] ?></td>
    </tr>
    <?php
    }
      ?>
    </table>

</body>
</html>
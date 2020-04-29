<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Detalle de la venta</h1>
Total de la venta:<?=$_REQUEST['total']?>
<table>
	<tr>
		<th>Id_Libro</th>
		<th>Imagen</th>
		<th>Título</th>
		<th>Descripcion</th>
		<th>Precio/Unitario</th>
		<th>Cantidad</th>
		<th>Total</th>
    </tr>
    <?php foreach ($ventas as $key => $value) {?>
    <tr>
   		<td><?=$value['id_libro']?></td>
   		<td><img src="../View/img/<?=$value['imagen']?>"width=30></td>
   		<td><?=$value['titulo']?></td>
   		<td><?=$value['descripcion']?></td>
   		<td><?=$value['precio']?></td>
   		<td><?=$value['cantidad']?></td>
   		<td><?=$gastos=$value['cantidad']*$value['precio']?></td>
    </tr>
	<?php }?>
	
</table>
</body>
</html>
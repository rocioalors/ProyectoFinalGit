<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border=0>
		<tr>
			<th rowspan="3"><img src="../View/img/<?=$data['libro']->getImagen()?>" width="200" height="170"></th>
		</tr>
		<tr>
			<th><?=$data['libro']->getTitulo()?></th>
		</tr>
		<tr>
			<th><?=$data['libro']->getDescripcion()?></th>
		</tr>
		
	</table>

</body>
</html>
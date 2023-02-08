<?php
    include('db.php');

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Tabla de Productos</title>
</head>

<body>
	<div class="contenedor">
		<div class="sub_contenedor">
			<div class="tabla">
				<table>
					<tr class="title">
						<td class="titulo">Nombre</td>
						<td class="titulo">Precio</td>
						<td class="titulo">Cantidad</td>
						<td class="titulo_ultimo">Existencia</td>
					</tr>
					<?php
                        $peticion = "SELECT * FROM datos";
    $validacion = mysqli_query($conexion, $peticion);
    while ($muestra = mysqli_fetch_array($validacion)) {
        ?>
					<tr>
						<td><?php echo $muestra['Nombre']?>
						</td>
						<td><?php echo $muestra['Precio']?>
						</td>
						<td><?php echo $muestra['Cantidad']?>
						</td>
						<td class="ultimo">
							<?php echo $muestra['Existencias']?>
						</td>
					</tr>

					<?php

    }?>
				</table>
			</div>
		</div>
	</div>

</body>

</html>
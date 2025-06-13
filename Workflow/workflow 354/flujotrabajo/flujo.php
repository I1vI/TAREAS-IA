<?php
include "conectar.php";
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];

$sql="SELECT * from flujoproceso where flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);

$pantalla=$fila["pantalla"];
?>

<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body>
		<form action="controlador.php" method="get">
			<center>
			<br>
			<?php
			echo "<h1><b><i> $pantalla </i></b></h1>";
			include "pantalla/$pantalla.php";
			?>
			<br/>
			<input type="hidden" value="<?php echo $pantalla;?>" name="pantalla"/>
			<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
			<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
			<br/>
			<input type="submit" value="Anterior" name="Anterior" class="btn btn-primary"/>
			<input type="submit" value="Siguiente" name="Siguiente" class="btn btn-primary"/>
			</center>
		</form>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<html>
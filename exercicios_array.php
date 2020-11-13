<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		
		$numerosAleatorios = rand(1,60);
		$ArrayDeNum = [];

		for($x=1; $x<=6; $x++){
			
			while(in_array($numerosAleatorios, $ArrayDeNum)){
				$numerosAleatorios = rand(1,60);
			}

			$ArrayDeNum[] = $numerosAleatorios;			
		}

		
		echo '<pre>';
		print_r($ArrayDeNum);
		echo '</pre>';
			
			
		?>

	</body>
</html>
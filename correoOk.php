<!DOCTYPE html>
<html lang="es">
<head>
	<META HTTP-EQUIV="REFRESH" CONTENT="5;index.html">
	<title>Inerzia</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="inerzia.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="inerzia.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-header container-fluid fixed-top" style="background-color: #0082a6; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, #0082a6 , #005c83); /* Standard syntax (must be last) */">
  		<a href="."><img class="navbar-brand" id="logonav" src="logo2.png"></a>
	</nav>
	<?php
	if($flagmail == 0){
	?>
	<div class="alert alert-success" role="alert" style="margin-top: 72px;max-width: 80%;">
		<?=$mensaje?>
	</div>
	<?php
	}
	else{
	?>
	<div class="alert alert-danger" role="alert" style="margin-top: 72px;max-width: 80%;">
		<?=$mensaje?>
	</div>
	<?php
	}
	?>
</body>
</html>
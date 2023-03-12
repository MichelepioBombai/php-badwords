<?php
$paragrafo = $_GET["paragrafo"] ?? "lorem ipsum";
$parola_censurata = $_GET["parola_censurata"] ?? "lorem"; 

$paragrafo_length = strlen($paragrafo);

$paragrafo_censurato = str_replace($parola_censurata, "***", $paragrafo);

$paragrafo_censurato_length = strlen($paragrafo_censurato);



?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form php</title>

	<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
</head>
<body>
	<div class="container">
		<h3>Paragrafo originale:</h3>
		<p><?= $paragrafo ?></p>
		<p>Lunghezza del paragrafo:   <strong><?= $paragrafo_length ?></strong> </p>

		<h3>il paragrafo censurato è</h3>
		<p><?= $paragrafo_censurato ?></p>
		<p>Lunghezza del paragrafo censurato é:   <strong><?= $paragrafo_censurato_length ?></strong> </p>
	</div>
</body>
</html>
	
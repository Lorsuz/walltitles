<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="../css/settings.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
	<?php include_once 'layouts/header.php' ?>
	<main>
		<form action="">
			<h2>Conta</h2>
			<a href="" class="delete">deletar</a>

			<div>
				<label for="">Foto de perfil</label>
				<input type="file">
			</div>

			<div>
				<label for="">nome</label>
				<input type="text">
			</div>

			<div>
				<label for="">e-mail</label>
				<input type="text">
			</div>

			<div>
				<label for="">senha</label>
				<input type="password">
			</div>
			<button type="submit">Salvar Alterações</button>

		</form>
	</main>

	<script src="../js/navbar.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meus posts</title>
	<link href="../css/contributions.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
	<?php include_once 'layouts/header.php' ?>
	<main>
<div>
	<h3>Seus posts aparecerão aqui</h3>
	<p>Sem contribuições! Você não tem arquivos compartilhados com a comunidade!</p>
	<button>Compartilhar Wallpaper</button>
</div>
</main>
<div class="form">
		<div class="container-form">
			<button class="back"><i class="fa-solid fa-xmark"></i></button>
			<h1>Novo Wallpaper</h1>
			<form>
				<div class="name-box">
					<label for="file">Wallpaper:</label>
					<input id="file" name="name-box" type="file">
				</div>
				<div class="name-box">
					<label for="name-box">Nome do wallpaper:</label>
					<input id="name-box" name="name-box" type="text">
				</div>
				<div class="name-box">
					<label for="name-box">Tags do wallpaper:</label>
					<input id="name-box" name="name-box" type="text">
				</div>
				<button type="submit">Criar</button>
			</form>
		</div>
	</div>
	<?php include_once 'layouts/footer.php' ?>

	<script src="../js/navbar.js"></script>
	<script>
		document.querySelector('main div button').addEventListener('click', () => {
			document.querySelector('div.form').style.display = 'flex';
		});
		document.querySelector('button.back').addEventListener('click', () => {
			document.querySelector('div.form').style.display = 'none';
		})
	</script>
</body>

</html>

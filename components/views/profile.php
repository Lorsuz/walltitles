<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link href="../css/profile.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
	<?php include_once 'layouts/header.php' ?>
	<main>
		<div class="profile-container">
			<div class="bg-profile">
				<img src="../img/quadrados-de-fundo-roxo.jpg" alt="">
			</div>
			<div class="profile">
				<div class="img-profile">
					<img src="../img/no-profile.png" alt="">
					<div class="bg-edit">
						<a href="settings.php">Editar</a>
					</div>
				</div>
				<h2>Lorsuz</h2>
			</div>
			<div class="info">
				<div class="basic">
					<div><span>Nome completo:</span><span>Ariel do Nascimento de Souza</span></div>
					<div><span>Data de Nascimento:</span><span>05/09/2005</span></div>
					<div><span>Sexo:</span><span>Masculino</span></div>
				</div>
				<div class="contact">
					<div><span>E-mail:</span><span>ariel2005souza@gmail.com</span></div>
					<div><span>Telefone:</span><span>+55 (87) 9 8214-1365</span></div>
				</div>
			</div>

		</div>

		<div class="boxes-container">
			<h1>Boxes</h1>
			<button class="add-card"><span>Novo</span>
				<i class="fa-solid fa-plus"></i>
			</button>
			<div class="content-boxes">
				<div class="card-box">
					<a href="titles.php"></a>
					<button class="update"><i class="fa-solid fa-pen-to-square"></i></button>
				</div>
			</div>
		</div>
	</main>
	<div class="form">
		<div class="container-form">
			<button class="back"><i class="fa-solid fa-xmark"></i></button>
			<h1>Criar novo Box</h1>
			<form>
				<div class="name-box">
					<label for="name-box">Nome do Box:</label>
					<input id="name-box" name="name-box" type="text">
				</div>
				<button type="submit">Criar</button>
			</form>
		</div>
	</div>
	</main>
	<?php include_once 'layouts/footer.php' ?>

	<script src="../js/navbar.js"></script>
	<script>
		var divs = [document.querySelector('.card-box')]
		var data = [
			'Livros', 'Animes', "Filmes", "Mangas", "Series", "Sagas"
		]
		for (let index = 0; index < data.length; index++) {
			var div = document.querySelector('.card-box').cloneNode(true)
			divs.push(div)
			divs[index].childNodes[1].innerHTML = data[index]
			document.querySelector('.content-boxes').appendChild(divs[index])
			console.log()
		}

		document.querySelector('button.add-card').addEventListener('click', () => {
			document.querySelector('div.form').style.display = 'flex';
		});
		document.querySelector('button.back').addEventListener('click', () => {
			document.querySelector('div.form').style.display = 'none';
		})
	</script>

</body>

</html>

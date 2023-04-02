<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gallery</title>
	<link href="../css/profile.css" rel="stylesheet">
	<link href="../css/gallery.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
	<?php include_once 'layouts/header.php' ?>
	<main>
		<nav>
			<h2>Minha Galeria</h2>
			<button>
				<i class="fa-solid fa-plus"></i>
				<span>Nova Pasta</span>
			</button>
		</nav>
		<div class="container">
			<div class="card">
				<div class="img"><img src="./../img/wallpapers/itachi.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/stains.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/slime.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/saitama.jpg" alt=""></div>
				<div class="bar">
					<h3>Todos</h3>
					<button><i class="fa-solid fa-pen-to-square"></i><span>Editar</span></button>
				</div>
			</div>
			<div class="card">
				<div class="img"><img src="./../img/wallpapers/stains.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/rimuru.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/kurisu.jpg" alt=""></div>
				<div class="bar">
					<h3>Isekais</h3>
					<button><i class="fa-solid fa-pen-to-square"></i><span>Editar</span></button>
				</div>
			</div>
			<div class="card">
				<div class="img"><img src="./../img/wallpapers/dxd.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/death.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/eren.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/nezuko.jpg" alt=""></div>
				<div class="bar">
					<h3>Death</h3>
					<button><i class="fa-solid fa-pen-to-square"></i><span>Editar</span></button>
				</div>
			</div>
			<div class="card">
				<div class="img"><img src="./../img/wallpapers/haikyuu.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/luffy.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/saitama.jpg" alt=""></div>
				<div class="img"><img src="./../img/wallpapers/gojo.jpg" alt=""></div>
				<div class="bar">
					<h3>4K</h3>
					<button><i class="fa-solid fa-pen-to-square"></i><span>Editar</span></button>
				</div>
			</div>
		</div>

	</main>
	<?php include_once 'layouts/footer.php' ?>

	<!-- <script>
		var divs = []
		for (let index = 0; index < 5; index++) {
			var div = document.querySelector('.card').cloneNode(true)
			divs[index] = div
			document.querySelector('.container').appendChild(divs[index])
		}
	</script> -->
	<script src="../js/navbar.js"></script>
</body>

</html>
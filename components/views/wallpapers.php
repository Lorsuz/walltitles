<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wallpapers</title>
	<link href="../css/wallpapers.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
	<?php include_once 'layouts/header.php' ?>

	<main>

		<nav>
			<h2>Wallpapers</h2>

			<form action="">

				<div class="select">
					<label for="sort">Organizar por:</label>
					<select name="" id="sort">
						<option value="">Títulos</option>
						<option value="">Populares</option>
						<option value="">Recentes</option>
					</select>
				</div>

				<div class="select">
					<label for="">Ordem:</label>
					<select name="" id="order">
						<option value="">Crescente</i></option>
						<option value="">Decrescente</option>
					</select>
				</div>
				<div class="select">
					<label for="">Filtros:</label>
					<select name="" id="">
						<option value="">Tudo</option>
						<option value="">Wallpapers</option>
						<option value="">Tags</option>
						<option value="">Criadores</option>
					</select>
				</div>
				<div class="input" action="" method="post">
					<input type="text" name="" id="" placeholder="Pesquisar">
					<button type="submit">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</div>
			</form>
		</nav>
		<span>5.465 resultados!</span>

		<div class="container">
			<div class="card">
				<img src="./../img/wallpapers/saitama.jpg" alt="">
				<div class="tags">
					<a href="#">#tag</a>  
					<a href="#">#tag</a>  
					<a href="#">#tag</a>  
					<a href="#">#tag</a>  
					<a href="#">#tag</a>  
				</div>
				<button href="#" class="owner">
					<img src="./../img/no-profile.png" alt="">
					<span></span>
				</button>
				<div class="details">
					<div class="likes">
						<!-- <i class="fa-regular fa-heart"></i> -->
						<i class="fa-solid fa-heart"></i>
						<span></span>
					</div>
					<span></span>
					<button><i class="fa-solid fa-download"></i></button>
				</div>
			</div>

	</main>
	<?php include_once 'layouts/footer.php' ?>

	<script src="../js/navbar.js"></script>

	<script>
		var div;
		var divs = [document.querySelector('.card')]
		var tags = [document.querySelector('.tags a')]
		var data = [
			["itachi.jpg", "Itachi", ["Jujutsu", "Satoru"], "Ariel"],
			["eren.jpg", "Eren", ["Re:zero", "subaru","rem"], "Rennan"],
			["kurisu.jpg", "Kurisu", ["Re:zero", "subaru","rem"], "Ariel"],
			["death.jpg", "Death Note", ["Re:zero", "subaru","rem"], "20comer"],
			["slime.jpg", "Tensei shitara slime", ["Re:zero", "subaru","7"], "70correr"],
			["saitama.jpg", "Saitama's cute", ["Saitama", "One", "Cute", "Punch"], "Lorsuz"],
			["dxd.jpg", "DxD", ["Re:zero", "subaru","rem"], "Rennan"],
			["gojo.jpg", "Gojou Satoru", ["Re:zero", "subaru","rem"], "grabiel"],
			["haikyuu.jpg", "haikyuu", ["Re:zero", "subaru","rem"], "estagiario"],
			["itachi.jpg", "itachi", ["Re:zero", "subaru","rem"], "Lucy"],
			["luffy.jpg", "Luffy", ["Re:zero", "subaru","rem"], "Rennan"],
			["stains.jpg", "stains gate", ["Re:zero", "subaru","rem"], "D. castro"]
			["rimuru.jpg", "Rimuru", ["Re:zero", "subaru","rem"], "Samu"]
		]

		for (let index = 0; index < data.length; index++) {

			div = document.querySelector('.card').cloneNode(true)
			divs.push(div)

			divs[index].childNodes[1].setAttribute("src", `../img/wallpapers/${data[index][0]}`)

			divs[index].childNodes[7].childNodes[3].innerHTML = data[index][1];

			/* console.log(index)
			for (let i = 0; i < data[index][2].length; i++) {
				tag = document.querySelector('.tags a').cloneNode(false)
				tags.push(tag)
				divs[index].childNodes[3].appendChild(tags[i])
				tags[i].innerHTML = "#" + data[index][2][i]
				console.log(divs[index].childNodes[3].childNodes[i + 2])
			} */

			divs[index].childNodes[7].childNodes[1].childNodes[5].innerHTML = Math.floor((Math.random()*500));

			divs[index].childNodes[5].childNodes[3].innerHTML = data[index][3];



			document.querySelector('.container').appendChild(divs[index])
		}
	</script>

</body>

</html>







<!-- // tag = divs[0].childNodes[3].childNodes[1];
// divs[index].childNodes[1].childNodes[1].setAttribute("src", `../img/l${index+1}.png`)
// divs[index].childNodes[3].innerHTML = data[index][0]
// divs[index].childNodes[5].innerHTML = data[index][1] 


		class Wallpaper {


			path
			name
			tags = []
			likes
			owner

			adrPath = divs[index].childNodes[1]
			
			adrName
			adrTags
			adrLikes
			adrOwner

			constructor(path, name, tags, likes, owner) {
				this.path = path
				this.name = name
				this.tags = tags
				this.likes = likes
				this.owner = owner


			}

			insertPath() {
				this.adrPath.setAttribute("src", `../img/wallpapers/${this.path}`)
			}

			static print(item) {
				console.log(item)
			}

		}
-->
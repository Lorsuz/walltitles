<header>
	<span>WallTitles</span>
	<div class="profile-menu">
		<div class="img">
			<img src="../img/no-profile.png" alt="">
		</div>
	</div>
	<nav class="nav-list">
		<ul>
			<li><a href="profile.php"><i class="fa-solid fa-user"></i><span>Perfil</span></a></li>
			<li><a href="wallpapers.php"><i class="fa-solid fa-house"></i><span>WallPapers</span></a></li>
			<li><a href="gallery.php"><i class="fa-solid fa-image"></i><span>Galeria</span></a></li>
			<li><a href="contributions.php"><i class="fa-solid fa-square-plus"></i><span>Contribuições</span></a></li>
			<li><a href="settings.php"><i class="fa-solid fa-gear"></i><span>Configurações</span></a></li>
			<li><a href="support.php"><i class="fa-solid fa-circle-info"></i><span>Suporte</span></a></li>
			<li><a href="https://github.com/Lorsuz" target="_blank"><i class="fa-sharp fa-solid fa-code"></i><span>Desenvolvedores</span></a></li>
			<li><a href="monetization.php"><i class="fa-solid fa-circle-dollar-to-slot"></i><span>Apoie-nos</span></a></li>
		</ul>
		<form action="/logout" method="POST" class="log-out">
			<!-- @csrf -->
			<!-- <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit()">Log out</a> -->
			<a href="./../../index.html"><i class="fa-solid fa-right-to-bracket"></i><span>Sair</span></a>
		</form>
		<footer>
			<p>Copyright &copy; - Todos os direitos reservados!</p>
		</footer>
	</nav>
</header>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>LP WEB</title>
	<link rel="stylesheet" type="txt/css" href="css/andremachado.css"/>
	<script src="js/andremachado.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
	<div id="fixado">
		<div class="topo">
			<ul>
				<li><a href="index.php?url=inicial"><div>Home</div></a></li>
				<li><a href="index.php?url=conta"><div>Minha conta</div></li>
				<li><a href="index.php?url=cores"><div>Tabela de cores html</div></li>
				<li><a href="index.php?url=visitas"><div>Livro de visitas</div></li>
				<li><a href="index.php?url=visitas"><div>Artigos e Tutoriais</div></li>
			</ul>
			<a href="index.php?url=sair"><div class="buttonSignInOut fr">Sign In</div></a>
		</div>
	</div>
	<div id="base">
		<div id="right">
			<div class="menu">
				<ul>
					<li>
						<a href="index.php?url=insert"><div>Insert</div></a>
					</li>
					<li>
						<a href="index.php?url=update"><div>Update</div></a>
					</li>
					<li>
						<a href="index.php?url=select"><div>Select</div></a>
					</li>
					<li>
						<a href="index.php?url=delete"><div>Delete</div></a>
					</li>
				</ul>
			</div>
			<div class="menu">
				<ul>
					<li>
						<a href="index.php?url=alter"><div>Alter</div></a>
					</li>
					<li>
						<a href="index.php?url=create"><div>Create</div></a>
					</li>
					<li>
						<a href="index.php?url=drop"><div>Drop</div></a>
					</li>
				</ul>
			</div>
			<div class="menu">
				<ul>
					<li>
						<a href="index.php?url=grant"><div>Grant</div></a>
					</li>
					<li>
						<a href="index.php?url=revoke"><div>Revoke</div></a>
					</li>
				</ul>
			</div>
			<div class="menu">
				<ul>
					<li>
						<a href="index.php?url=begin_work"><div>Begin Work</div></a>
					</li>
					<li>
						<a href="index.php?url=commit"><div>Commit</div></a>
					</li>
					<li>
						<a href="index.php?url=rollback"><div>Rollback</div></a>
					</li>
				</ul>
			</div>
		</div>
		<div id= "conteudo">
			<?php
			if (isset($_GET['url'])) {
					$url = $_GET['url'];
				if (!file_exists("paginas/$url.php")) {
					$url = "404";
				}
			}else {
				$url = "inicial";
			}
			include("paginas/$url.php");
			?>
		</div>
		<div id = "rodape">
			Designed by André (:
		</div>
	</div>
</body>
</html>
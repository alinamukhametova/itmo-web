<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="./css/colors.css" />
	<link rel="stylesheet" type="text/css" href="./css/styles.css" />
	<title>Document</title>
</head>

<body>
	<div class="page-wrapper header">
		<div class="logo">
			<img src="public/icon/logo.svg" />
		</div>
		<ul class="nav-menu">
			<li><a href="">Новинки</a></li>
			<li><a href="">Каталог</a></li>
			<li><a href="">Sale</a></li>
			<li><a href="">Создать мерч</a></li>
		</ul>
		<div class="menu">
			<a href="#"><img src="public/icon/search.svg" /></a>
			<a href="#"><img src="public/icon/user.svg" /></a>
			<a href="#"><img src="public/icon/cart.svg" /></a>
		</div>
	</div>
	<div class="page-wrapper header-mob">
		<div class="left-menu">
			<a href="#"><img src="public/icon/menu.svg" /></a>
			<a href="#"><img src="public/icon/search.svg" /></a>
		</div>
		<div class="logo">
			<img src="public/icon/logoMob.svg" />
		</div>
		<div class="right-menu">
			<a href="#"><img src="public/icon/user.svg" /></a>
			<a href="#"><img src="public/icon/cart.svg" /></a>
		</div>
	</div>
	<div class="banner">
		<img src="public/img/9568D19B-339E-4020-898A-C72D6171477F_1_105_c.jpeg" />
	</div>
	<div class="about-us">
		<p>
			AltMERCH – комплексное создание вашей фирменной линии атрибутики. От
			разработки дизайн-концепции до производства и продажи.
		</p>
		<p>
			Создавайте собственный мерч – неважно есть ли у вас опыт в этом, вам не
			обязательно быть дизайнером - мы всё возьмем на себя.
		</p>
	</div>
	<div class="page-wrapper content">
		<h2>Реализованные проекты</h2>
		<?php require("./components/list.php") ?>
	</div>
</body>

</html>
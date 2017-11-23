<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/css/slick-theme.css">
	
	<title>Kino-news | <?php if ($action == 'Main') {echo 'Трейлеры и описание фильмов';}
		  elseif ($action == 'Contacts') {echo 'Наши контакты';}
		  elseif ($action == 'Login') {echo 'Вход';}
		  else {echo $action;}
	?>
	</title>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Kino <i class="fa fa-film"></i> news</a>
			</div>
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li <?php if ($action == 'Main') echo 'class="active"'; ?> ><a href="/">Главная</a></li>
					<li <?php if ($action == 'Contacts') echo 'class="active"'; ?> ><a href="/contacts">Контакты</a></li>
					
					<?php if(User::isGuest()): ?>
					<li <?php if ($action == 'Login') echo 'class="active"'; ?> >	<a href="/login">Войти</a></li>
					<?php else: ?>
					<li <?php if ($action == 'Admin') echo 'class="active"'; ?> >	<a href="/admin">Админка!</a></li>
					<li ><a href="/logout">Выйти</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	
	<br><br>
	
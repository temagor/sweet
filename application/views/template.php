<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
	<h1>
		<a href="/main/form_insert_to_content">Добавить главу книги</a>
	</h1>
	<header></header>
	<nav>
		<a href="/main/insert_to_products">Ввод данных о продукте</a>
	</nav>
	<article>
		<?php

			include_once "$content_view";

	  	?>
	</article>
	<aside><form action="" method="get">
<button type="submit" name="section_id" value="id">MAIN</button>
</form></aside>
	<footer></footer>	
</body>
</html>
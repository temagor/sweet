<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="application/css/desctop.css">
</head>
<body>
	<header>{$header}</header>
	<nav>
		<form action="" method="get">
			<?php include_once 'forms/form_navigation.php'; ?>
		</form>
		
	</nav>
	<article>
		<?php

			include_once "$content_view";

	  	?>
	</article>
	<aside></aside>
	<footer></footer>	
</body>
</html>
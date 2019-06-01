<?php
	
	
	include_once 'application/core/user.php';

	include_once 'application/core/mySQL.php';	

	include_once 'application/core/model.php';

	include_once 'application/core/view.php';

	include_once 'application/core/controller.php';

	include_once 'application/core/router.php';

	$route = new Router();
	
	$route->Start();

	

 ?>
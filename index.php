<?php

// Start session
session_start();
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/users.php');
require('controllers/teachers.php');
require('controllers/statistics.php');
require('controllers/lecturehalls.php');
require('controllers/search.php');

require('models/home.php');
require('models/user.php');
require('models/lecturehall.php');
require('models/statistic.php');
require('models/teacher.php');
require('models/search.php');

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if($controller) {
	$controller->executeAction();
}

?>
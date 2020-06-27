<?php
//start session
session_start();
// Include Config
require('config.php');
// classes files
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
// controllers
require('controllers/about.php');
require('controllers/contact.php');
require('controllers/news.php');
require('controllers/saloons.php');
require('controllers/reservations.php');
require('controllers/times.php');
require('controllers/home.php');
require('controllers/home1.php');
require('controllers/users.php');
require('controllers/shares.php');
// models
require('models/about.php');
require('models/contact.php');
require('models/news.php');
require('models/saloon.php');
require('models/reservation.php');
require('models/time.php');
require('models/home.php');
require('models/home1.php');
require('models/user.php');
require('models/share.php');
// message class
require('classes/Messages.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}

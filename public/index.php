<?php
session_start();
define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . 'src/Controller.php';
require_once ROOT_PATH . 'src/Template.php';
require_once ROOT_PATH . 'src/Database.php';
require_once ROOT_PATH . 'model/Page.php';

Database::connect('localhost', 'php-oop-mvc', 'root', 'root');


$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

if ($section == 'about-us') {
    include_once ROOT_PATH . 'Controllers/aboutUsPage.php';
    $aboutUsController = new AboutUsController();
    $aboutUsController->runAction($action);
} elseif ($section === 'contact-us') {
    include_once ROOT_PATH . 'Controllers/contactPage.php';
    $contactController = new contactController();
    $contactController->runAction($action);
} else {
    include_once ROOT_PATH . 'Controllers/homePage.php';
    $homePageController = new HomePageController();
    $homePageController->runAction($action);
}


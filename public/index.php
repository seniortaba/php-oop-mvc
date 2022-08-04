<?php
session_start();

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

if ($section == 'about-us') {
    include_once 'Controllers/contactPage.php';
    $aboutUsController = new AboutUsController();
    $aboutUsController->runAction($action);
} elseif ($section === 'contact-us') {
    include_once 'Controllers/contactPage.php';
    $contactController = new contactController();
    $contactController->runAction($action);
} else {
    include_once 'Controllers/homePage.php';
    $homePageController = new HomePageController();
    $homePageController->runAction($action);
}


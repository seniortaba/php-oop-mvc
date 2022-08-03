<?php
$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action']?? 'show';
if ($section == 'about-us') {
    include 'Controllers/aboutUsPage.php';
} elseif($section === 'contact-us') {
    include_once 'Controllers/contactPage.php';
    $contactController = new contactController();
    if($action === 'show')
        $contactController->showAction();
    if($action === 'submit')
        $contactController->submitAction();
}else {
    include 'Controllers/homePage.php';
}


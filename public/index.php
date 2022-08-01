<?php
$section = $_GET['section'] ?? 'home';

if ($section == 'about-us') {
    include 'Controllers/aboutUs.php';
} elseif($section === 'contact-us') {
    include 'Controllers/contactUs.php';
}else {
    include 'Controllers/homePage.php';
}


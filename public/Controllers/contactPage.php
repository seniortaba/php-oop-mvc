<?php
include_once 'src/Controller.php';

class contactController extends Controller
{
    function runBeforeAction()
    {
        var_dump($_SESSION);
        echo 'inside before action';
        if($_SESSION['has_submitted_the_form'] ?? 0 == 1){
            require_once 'Views/contact/contact-us-already-contacted.html';
            return false;
        }
        return true;
    }

    function defaultAction()
    {
        echo 'inside in defaultAction';
        include_once 'Views/contact/contact-us.html';
        $_SESSION['has_submitted_the_form'] = 1;
    }

    function submitContactFormAction()
    {
        include_once 'Views/contact/contact-us-thank-you.html';
        $_SESSION['has_submitted_the_form'] = 1;
    }

}

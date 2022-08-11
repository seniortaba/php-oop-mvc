<?php
require_once 'src/Controller.php';
require_once 'src/Template.php';

class contactController extends Controller
{
    function runBeforeAction()
    {
        if($_SESSION['has_submitted_the_form'] ?? 0 == 1){
            $variables['title'] = "Thank contacted us already";
            $variables['content'] = "We will get back very soon";

            $template = new Template('default');
            $template->view('static-page', $variables);

            return false;
        }
        return true;
    }

    function defaultAction()
    {
        $variables['title']="Contact us page";
        $variables['content']="Write us a message";
        $template = new Template('default');
        $template->view('contact/contact-us', $variables);
    }

    function submitContactFormAction()
    {
        $variables['title']="Thank you for message";
        $variables['content']="We will get back soon";
        $template = new Template('default');
        $template->view('static-page', $variables);

        $_SESSION['has_submitted_the_form'] = 1;
    }

}

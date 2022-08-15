<?php
require_once 'src/Controller.php';
require_once 'src/Template.php';

class contactController extends Controller
{
    function runBeforeAction()
    {
        if($_SESSION['has_submitted_the_form'] ?? 0 == 1){

            $dbh = Database::getInstance();
            $dbc = $dbh->getConnection();

            $pageObj = new Page($dbc);
            $pageObj->findById(4);
            $variables['pageObj'] = $pageObj;

            $template = new Template('default');
            $template->view('static-page', $variables);

            return false;
        }
        return true;
    }

    function defaultAction()
    {
        $dbh = Database::getInstance();
        $dbc = $dbh->getConnection();

        $pageObj = new Page($dbc);
        $pageObj->findById(3);
        $variables['pageObj'] = $pageObj;

        $template = new Template('default');
        $template->view('static-page', $variables);
    }

    function submitContactFormAction()
    {
        $dbh = Database::getInstance();
        $dbc = $dbh->getConnection();

        $pageObj = new Page($dbc);
        $pageObj->findById(5);
        $variables['pageObj'] = $pageObj;

        $template = new Template('default');
        $template->view('static-page', $variables);

        $_SESSION['has_submitted_the_form'] = 1;
    }

}

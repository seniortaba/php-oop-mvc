<?php
require_once 'src/Controller.php';
require_once 'src/Template.php';

class AboutUsController extends Controller
{
    function defaultAction()
    {
        $dbh = Database::getInstance();
        $dbc = $dbh->getConnection();

        $pageObj = new Page($dbc);
        $pageObj->findById(2);
        $variables['pageObj'] = $pageObj;

        $template = new Template('default');
        $template->view('static-page', $variables);
    }
}

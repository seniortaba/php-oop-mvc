<?php
require_once 'src/Controller.php';
require_once 'src/Template.php';
class HomePageController extends Controller
{
    public function defaultAction()
    {
        $dbh = Database::getInstance();
        $dbc = $dbh->getConnection();
        $pageObj = new Page($dbc);
        $pageObj->findById(1);
        $variables['pageObj'] = $pageObj;
        $template = new Template('default');
        $template->view('static-page', $variables);
    }
}


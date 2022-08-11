<?php
require_once 'src/Controller.php';
require_once 'src/Template.php';

class AboutUsController extends Controller
{
    function defaultAction()
    {
        $variables['title']="About us Page";
        $variables['content']="Everything for about us";
        $template = new Template('default');
        $template->view('static-page', $variables);
    }
}

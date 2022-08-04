<?php
include_once 'src/Controller.php';

class HomePageController extends Controller
{
    public function defaultAction()
    {
        include_once 'Views/home-page.html';
    }
}


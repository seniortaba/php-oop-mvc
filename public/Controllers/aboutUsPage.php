<?php
include_once 'src/Controller.php';

class AboutUsController extends Controller
{
    function defaultAction()
    {
        include 'Views/about-us.html';
    }
}

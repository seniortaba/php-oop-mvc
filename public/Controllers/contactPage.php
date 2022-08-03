<?php
class contactController
{
    public function showAction()
    {
        require_once 'Views/contact-us.html';
    }

    public function submitAction()
    {
        require_once 'Views/contact-us-thank-you.html';
    }
}

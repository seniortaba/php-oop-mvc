<?php

class Controller
{
    function runAction($actionName)
    {
        echo 'inside in Controller::runAction';
        if(method_exists($this, 'runBeforeAction')){
            $result = $this->runBeforeAction();
            if($result === false){
                return;
            }
        }

        $actionName .= 'Action';
        if(method_exists($this, $actionName)){
            $this->$actionName();
        }else{
            include_once 'Views/status-page/404.html';
        }
    }
}
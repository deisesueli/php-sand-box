<?php

namespace Library\Core\Http;

use Library\Core\Http\Router\RouterInterface;
use Library\Core\Http\Request\RequestInterface;


class Router implements RouterInterface
{

    public $controllerName;
    public $controllerClass;
    public $actionName;

    public function __construct(RequestInterface $request)
    {
        $this->controllerName = $request->getControllerName();
        $this->actionName = $request->getActionName();
    }

    public function createController()
    {
       $this->controllerClass =  new $this->controllerName;
       return $this->controllerClass;
    }

    public function createAction()
    {
        $actionName = $this->actionName;
        return $this->controllerClass->$actionName();
    }

}
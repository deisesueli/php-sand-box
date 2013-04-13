<?php
namespace Library\Core\Http;

use Library\Core\Http\Router\RouterInterface;
use Library\Core\Http\Request\RequestInterface;
use Library\Core\Http\Response\ResponseInterface;
use Library\Core\Http\Dispatcher\DispatcherInterface;

class Dispatcher implements DispatcherInterface
{

    public function __construct(RouterInterface $router){

        $this->route = $router;
    }

    public function dispatch(RequestInterface $request, ResponseInterface $response){

        $controller = $this->route->createController();
        $controller = $this->route->createAction();
	}
}
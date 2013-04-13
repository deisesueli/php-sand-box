<?php
namespace Library\Core\Http;

use Library\Core\Http\FrontController\FrontControllerInterface;
use Library\Core\Http\Request\RequestInterface;
use Library\Core\Http\Response\ResponseInterface;
use Library\Core\Http\Dispatcher\DispatcherInterface;

class FrontController implements FrontControllerInterface
{
    protected $router;
    protected $dispatcher;

    public function __construct(DispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function run(RequestInterface $request, ResponseInterface $response)
    {
        $this->dispatcher->dispatch($request, $response);
    }
}
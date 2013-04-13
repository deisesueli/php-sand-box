<?php
namespace Library\Core\Http\Dispatcher;

use Library\Core\Http\Request\RequestInterface;
use Library\Core\Http\Response\ResponseInterface;

interface DispatcherInterface
{
	public function dispatch(RequestInterface $request, ResponseInterface $response);
}
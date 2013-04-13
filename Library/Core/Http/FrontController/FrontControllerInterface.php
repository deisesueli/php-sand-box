<?php
namespace Library\Core\Http\FrontController;

use Library\Core\Http\Request\RequestInterface;
use Library\Core\Http\Response\ResponseInterface;

interface FrontControllerInterface
{
	public function run(RequestInterface $request, ResponseInterface $response);
}
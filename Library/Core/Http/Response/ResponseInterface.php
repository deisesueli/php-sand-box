<?php

namespace Library\Core\Http\Response;

interface ResponseInterface{

	public function addHeader($header);
	public function addHeaders(array $headers);
	public function getHeaders();
	public function send();

}
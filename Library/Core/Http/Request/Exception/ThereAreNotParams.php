<?php

namespace Library\Core\Http\Request\Exception;

class ThereAreNotParams extends \Exception
{
	public function __construct($message = "There are not params."){
		parent::__construct($message);
	}
}
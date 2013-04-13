<?php

namespace Library\Core\Http\Request\Exception;

class ParamNotExists extends \Exception
{
	public function __construct($message = "This param not exists."){
		parent::__construct($message);
	}
}
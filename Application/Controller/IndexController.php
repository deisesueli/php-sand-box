<?php
namespace Application\Controller;

use Application\Controller\Controller;

class IndexController extends Controller{

	public function index() {
        $this->renderLayout(array('var1'=>'1'));
    }

}
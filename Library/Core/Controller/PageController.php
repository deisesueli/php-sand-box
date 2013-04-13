<?php
namespace Library\Core\Controller;

use Library\Core\Http\Request;

class PageController extends Request
{
    public $layout = "default";

    public function __construct()
    {
        $this->beforeCall();
    }

    public function renderLayout($param)
    {
        include_once(sprintf("%s/%s.phtml", self::DEFAULT_LAYOUT_PATH, $this->layout));
    }

    public function renderContent()
    {
        include_once(sprintf("%s/%s/%s.phtml", self::DEFAULT_VIEW_PATH, $this->getControllerName(), $this->getActionName()));
    }
}

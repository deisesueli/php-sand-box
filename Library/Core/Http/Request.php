<?php
namespace Library\Core\Http;

use Library\Core\Http\Request\AbstractRequest;

class Request extends AbstractRequest
{

    const DEFAULT_NAME = "index";
    const DEFAULT_CONTROLLER_NAME = "Controller";
    const DEFAULT_CONTROLLER_PATH = "\\Application\\Controller\\";

    public function __construct()
    {
        parent::createRequest();

    }

    /**
     * Returns a controller name
     * @return string
     */
    public function getControllerName(){

        $urlParsed = explode("/",$this->getQuery());
        $name = self::DEFAULT_NAME;

        if(!empty($urlParsed[0])){
            $name = $urlParsed[0];
        }

        $name = ucfirst(strtolower($name));
        $name .= self::DEFAULT_CONTROLLER_NAME;
        $className = self::DEFAULT_CONTROLLER_PATH.$name;

        return $className;

    }

    /**
     * Returns a action name
     * @return string
     */
    public function getActionName(){

        $urlParsed = explode("/",$this->getQuery());
        $name =  self::DEFAULT_NAME;

        if(!empty($urlParsed[1])){
            $name = strtolower($urlParsed[1]);
        }

        return $name;

    }



}
<?php
namespace Library\Core\Http;

use Library\Core\Http\Response\AbstractResponse;

class Response extends AbstractResponse
{

    public function notFound()
    {
        $this->addHeader($this->version . ' 404 Not Found');
    }

    public function redirect($redirect)
    {
        $this->addHeader("location: $redirect");
    }

}
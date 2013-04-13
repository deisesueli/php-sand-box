<?php
namespace Library\Core\Http\Response;

use Library\Core\Http\Response\ResponseInterface;

abstract class AbstractResponse implements ResponseInterface
{

    protected $version = "HTTP/1.1";
    protected $headers = array();

    public function addHeader($header)
    {
        $this->headers[] = $header;
    }

    public function addHeaders(array $headers)
    {
        foreach ($headers as $header) {
            $this->addHeader($header);
        }
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function send()
    {
        foreach ($this->headers as $header) {
            header($header);
        }
    }

}
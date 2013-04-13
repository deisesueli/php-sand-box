<?php

namespace Library\Core\Http\Request;

use Library\Core\Http\Request\RequestInterface;

class AbstractRequest implements RequestInterface
{
    public $query;
    public $protocol;
    public $post;
    public $file;
    public $host;

    /**
     * Create a Request object.
     */
    public function createRequest()
    {
        $this->setQuery();
        $this->setProtocol();
        $this->setPost();
        $this->setFile();
        $this->setHost();
    }

    /**
     * Set url params
     */
    public function setQuery()
    {
        $this->query = (isset($_GET['url'])) ? $_GET['url'] : null;
    }

    /**
     * Returns url params.
     * @param string $key
     * @return mixed
     */
    public function getQuery($key = null)
    {

        return $this->query;
    }

    /**
     * Set current protocol
     */
    public function setProtocol()
    {
        $this->protocol = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false) ? 'http' : 'https';
    }

    /**
     * Get current protocol
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Set variable provided to the script via POST method ($_POST).
     */
    public function setPost()
    {
        $this->post = (isset($_POST)) ? $_POST : null;
    }

    /**
     * Returns variable provided to the script via POST method ($_POST). If no key is passed, returns the entire array.
     * @param string $key
     * @return mixed
     */
    public function getPost($key = null)
    {

        if (isset($key)) {
            return (isset($this->post[$key])) ? $this->post[$key] : null;
        }
        return $this->post;
    }

    /**
     * Set uploaded file.
     */
    public function setFile()
    {
        $this->file = (isset($_FILES)) ? $_FILES : null;
    }

    /**
     * Get uploaded file
     * @param string
     * @return mixed
     */
    public function getFile($key)
    {
        return $this->file[$key];
    }

    /**
     * Get uploaded files
     * @return array
     */
    public function getFiles()
    {
        return $this->file;
    }

    /**
     * Set current host
     */
    public function setHost()
    {

        $this->host = $_SERVER['HTTP_HOST'];

        if (isset($_SERVER['SERVER_NAME'])) {
            $this->host = $_SERVER['SERVER_NAME'];
        }

    }

    /**
     * Get current host
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }


    /**
     * Check if protocol is HTTPS.
     */
    public function isSecure()
    {
        $protocol = parent::getProtocol();
        $isSecure = false;
        if ($protocol == 'https') {
            $isSecure = true;
        }
        return $isSecure;
    }
}
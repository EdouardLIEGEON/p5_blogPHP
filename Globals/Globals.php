<?php
namespace App\Globals;

class Globals{
    private $_POST;
    private $_SERVER;
    private $_GET;

    public function __construct()
    {
        $this->GET = filter_input_array(INPUT_GET) ?? null;
        $this->POST = filter_input_array(INPUT_POST) ?? null;
        $this->SERVER = filter_input_array(INPUT_SERVER) ?? null;

    }
    public function getGET($key = null)
    {
        if (null != $key) {
            return $this->GET[$key] ?? null;
        }
        return $this->GET;
    }
    public function getPOST($key = null)
    {
        if (null != $key) {
            return $this->POST[$key] ?? null;
        }
        return $this->POST;
    }
    public function getSERVER($key = null)
    {
        if (null != $key) {
            return $this->SERVER[$key] ?? null;
        }
        return $this->SERVER;
    }
    
}
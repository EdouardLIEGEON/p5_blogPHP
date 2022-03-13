<?php
namespace App\Globals;

class Globals{
    private $_POST;
    private $_SERVER;

    public function __construct()
    {
        $this->POST = filter_input_array(INPUT_POST) ?? null;
        $this->SERVER = filter_input_array(INPUT_SERVER) ?? null;

    }
    public function getPOST($key = null){
        if(null != $key){
            return $this->POST[$key] ?? null;
        }
        return $this->POST;
    }
    public function getSERVER($key = null){
        if(null != $key){
            return $this->SERVER[$key] ?? null;
        }
        return $this->SERVER;
    }
}
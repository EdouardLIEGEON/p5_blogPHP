<?php
namespace App\Globals;

class Globals{
    private $_POST;

    public function __construct()
    {
        $this->POST = filter_input_array(INPUT_POST) ?? null;
    }
    public function getPOST($key = null){
        if(null != $key){
            return $this->POST[$key] ?? null;
        }
        return $this->POST;
    }
}
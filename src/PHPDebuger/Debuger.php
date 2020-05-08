<?php

namespace PHPDebuger;
require_once "../../vendor/autoload.php";

use PHPDebuger\Config\Options;

class Debuger{

    /**
     * @var Options
     */
    private $options;


    public function __construct()
    {

    }

    /**
     * @param $name
     * @param $mode
     * @return bool|false|resource
     */
    public function createFile($name,$mode){
        $dir = $this->options->getLogsDir();
        $file = $dir . '\\' . $name;
        if(!file_exists($file)){
            $new_file = fopen($name,$mode);
            return $new_file;
        }
        else{
            return false;
        }
    }
    public function Text($name){

    }
}
<?php


namespace PHPDebuger;


use PHPDebuger\Config\Options;

class Filer
{
    private $name;
    private $mode;
    private $handler;
    private $dir;
    public function __construct(Options $options,   $name,  $mode)
    {
         $this->dir = $options->getLogsDir();
         $this->name = $name;
         $this->mode = $mode;
         return $this->handler;
    }
    private function check(){
        if(file_exists($this->dir . '\\' . $this->name)){
            return true;
        }
        return false;
    }
    public function newFile(){
        if(!$this->check()){
            fopen($this->name,'a+');
        }
        return fopen($this->name,$this->mode);
    }
}
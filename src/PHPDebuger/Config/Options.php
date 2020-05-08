<?php
namespace PHPDebuger\Config;

class Options
{
    /**
     * @var int
     * values(0,1)
     */
    private $log_errors = 1;

    /**
     * @var string
     * emaple("C:\Users\Acer\Desktop\logs")
     */
    private $logs_dir = "";

    /**
     * Options constructor.
     * @param $logs_dir
     * emaple("C:\Users\Acer\Desktop\logs")
     */
    public function __construct($logs_dir)
    {
        $this->logs_dir = $logs_dir;
        self::setIni();
    }

    /**
     * @return int
     * return(0,1)
     */
    public function getErrorLog(){
        return $this->log_errors;
    }

    /**
     * @param $log_errors
     * values(0,1)
     */
    public function setErrorLog($log_errors){
        $this->log_errors = $log_errors;
    }

    /**
     * @param $logs_dir
     * emaple("C:\Users\Acer\Desktop\logs")
     */
    public function setLogsDir($logs_dir){
        $this->logs_dir = $logs_dir;
    }

    /**
     * @return string
     * return("C:\Users\Acer\Desktop\logs")
     */
    public function getLogsDir(){
        return $this->logs_dir;
    }

    public function setIni()
    {
        ini_set("log_errors",$this->log_errors);
        ini_set('error_log',$this->logs_dir . '/php_error.log');
    }
}
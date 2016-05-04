<?php
class Log
{
    public $filename;
    public $handle;

    public function __construct($prefix = 'log')
    {
        $this->prefix = $prefix;
        $todayFile = date("Y-m-d");
        $today = date("Y-m-d H:i:s");
        $this->filename = $this->prefix . "-$todayFile.log";
        $this->handle = fopen($this->filename, 'a');
        
    }

 
    public function logMessage($logLevel, $message)
    {
        $today = date("Y-m-d H:i:s");
        fwrite($this->handle, "$today [$logLevel] $message" . PHP_EOL);
    }

    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);
    }

    public function logError($message) 
    {
        $this->logMessage("ERROR", $message);
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

}
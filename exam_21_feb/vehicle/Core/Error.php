<?php
namespace Core;
class Error{
    public static function errorHandler($level, $message, $file, $line){
        if(error_reporting() !==0){
            throw new \ErrorException($message, 0, $level, $file, $line);
        }
    }
    public static function exceptionhandler($exception){
        $code = $exception->getCode();
        if($code != 400){
            $code = 500;
        }
        http_response_code($code);
        
        echo "<h1>FATAL ERROR</h1>";
        echo "<p>Uncaught Exception :'" . get_class($exception)."'</p>";
        echo "<p>Message: '". $exception->getMessage() ."'</p>";
        echo "<p> get trace:<pre>" . $exception->getTraceAsString() . "</pre></p>";
        echo "<p>Throw in '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
    }
}
?>
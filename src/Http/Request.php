<?php
Namespace    App\Http;

use Exception;
use UnderflowException;

class Request{


    public static function uri():string
    {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }
    


}
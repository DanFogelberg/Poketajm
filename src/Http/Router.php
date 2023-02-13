<?php

Namespace    App\Http;

use App\Exceptions\NotFoundHttpException;

class Router{

    public function __construct(public array $routes)
    {
        
        
    }

    public function direct(string $uri){        
        if(isset($this->routes[$uri]))
        {
            return $this->routes[$uri];
        }
        throw new NotFoundHttpException(("No route defined for this URI."));
    }
    


}
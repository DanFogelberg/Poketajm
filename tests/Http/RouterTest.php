<?php

use PHPUnit\Framework\TestCase;
use App\Http\Router;
use App\Exceptions\NotFoundHttpException;


class RouterTest extends TestCase{


   function test_direct()
   {
        $testRouter = new Router([
            "/" => "/controllers/pokedex.php",
            "/pokemon" => "/controllers/pokemon.php",
            "/404" => "/controllers/404.php"
          ]);

        $this->assertSame($testRouter->direct("/"), "/controllers/pokedex.php");
   }


   function test_route_not_found(){
        $testRouter = new Router([
            "/" => "/controllers/pokedex.php",
            "/pokemon" => "/controllers/pokemon.php",
            "/404" => "/controllers/404.php"
         ]);

         $this->assertSame($this->expectException(NotFoundHttpException::class), $testRouter->direct("/häst"));

       


   }

//    public function direct(string $uri){        
//     if(isset($this->routes[$uri]))
//     {
//         return $this->routes[$uri];
//     }
//     throw new NotFoundHttpException(("No route defined for this URI."));
}




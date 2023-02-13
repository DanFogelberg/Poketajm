<?php

namespace Tests;
use PHPUnit\Framework\TestCase;
use App\Pokemon;

class PokemonTest extends TestCase{

    function test_create_pokemon(){
        $pokemon = new Pokemon(5, "Pikachu");
        $this->assertSame(5, $pokemon->id);
        $this->assertSame("Pikachu", $pokemon->name);
        $this->assertSame("https://img.pokemondb.net/sprites/bank/normal/" . strtolower("Pikachu") . ".png", $pokemon->getImageUrl() );        
    }

}
    

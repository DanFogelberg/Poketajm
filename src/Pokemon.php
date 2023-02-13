<?php
namespace App;

class Pokemon{

    public function __construct(public int $id, public string $name)
    {
        
    }

    public function getImageUrl(){

        return "https://img.pokemondb.net/sprites/bank/normal/" . strtolower($this->name) . ".png";

    }

}
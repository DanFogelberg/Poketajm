<?php
use App\Pokemon;
$pokemons = $database->select()->from('pokemon')->get();


$pokemons = array_map(function ($pokemon){
    return new Pokemon($pokemon->id, $pokemon->name);
}, $pokemons);






require view("pokedex");
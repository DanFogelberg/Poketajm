<?php

use App\Pokemon;

$id = $_GET["id"] ?? 1;

$pokemon = $database->select()->from('pokemon')->where("id", "=", $id)->first();

$pokemon = new Pokemon($pokemon->id, $pokemon->name);




require view("pokemon");
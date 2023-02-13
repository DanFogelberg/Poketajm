<?php
echo "<ul>";
foreach($pokemons as $pokemon):
    ?> <li><a href="/pokemon?id=<?=$pokemon->id?>"> <?=$pokemon->name?> </a></li>
   
<?php endforeach;



echo "</ul>";
<?php

echo $pokemon->name;
$imageURL = $pokemon->getImageUrl();

?>

<img src="<?=$imageURL?>" alt="Pokemon in a jacket" width="500">

<?php 


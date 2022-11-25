
<?php

spl_autoload_register(function ($class_name) { 

    require_once $class_name . '.php';

});

$sebpot= new holder("POTHEE", "Sébastien", "12-01-1997", "Strasbourg");

$exempledecompte= new account("compte courant", "1000", "euros", $sebpot);

$exempledecompte2= new account ("livret A", "187.343333", "euros", $sebpot);
$sebpot->getinfoholder();


// var_dump($exempledecompte);

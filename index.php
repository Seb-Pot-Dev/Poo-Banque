
<?php

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

$sebpot= new account("compte courant", "1000", "euros", "<b><i>exemple de titulaire</i></b>");
$sebpot= new holder("POTHEE", "Sébastien", "12-01-1997", "Strasbourg", "exemple de comptes" );

$sebpot->getinfoholder();

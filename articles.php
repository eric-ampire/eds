<?php 

$a = array(
    'id' => 1,
    'code' => "123",
    'nom' => "Livre de math",
    'description' => "Merill",
    'prixUnitaire' => 123.5,
    'quantite' => 43,
    'dateCreation' => date("D, d M Y H:i:s"),
    'dateModification' => date("D, d M Y H:i:s")
);

$b = array(
    'id' => 2,
    'code' => "123",
    'nom' => "Livre de Francais",
    'description' => "Merill",
    'prixUnitaire' => 2000.5,
    'quantite' => 43,
    'dateCreation' => date("D, d M Y H:i:s"),
    'dateModification' => date("D, d M Y H:i:s")
);

$c = array(
    'id' => 3,
    'code' => "123",
    'nom' => "Livre d'histoire",
    'description' => "Merill",
    'prixUnitaire' => 5000.5,
    'quantite' => 43,
    'dateCreation' => date("D, d M Y H:i:s"),
    'dateModification' => date("D, d M Y H:i:s")
);

echo(json_encode(array($a, $b, $c)));


?>
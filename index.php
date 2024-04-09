<h1>POO Entreprise</h1>


<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG" );
//echo $elanformation->getRaisonSociale();
//var_dump($elanFormation);
//echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getdateCreation()->format("d-m-Y")." et se situe à l'adresse suivante ".$elanFormation->getadresse()." ".$elanFormation->getcodePostal()." ".$elanFormation->getville();
//echo $elanFormation->getadresseComplete();
//echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getdateCreation()->format("d-m-Y")." et se situe à l'adresse suivante ".$elanFormation->getadresseComplete();

$stephane = new Employe("SMAIL", "Stéphane", "stephane@elan-formation.fr", $elanFormation);

// echo $elanFormation
// echo $elanFormation->getInfos();
// $stephane->setEntreprise($tf1);
// echo $stephane->getInfos();
// var_dump($elanFormation);

echo $elanFormation->afficherEmployes();

?>
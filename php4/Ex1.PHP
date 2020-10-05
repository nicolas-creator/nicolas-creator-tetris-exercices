<?php
class ville
{
	public $nom;
	public $departement;

	public function getinfo()
	{
		return $nom + $departement; // réfléchir à ce que cette méthode doit renvoyer
	}
}

//Création d'objets

// on créé une première ville
$ville1 = new ville(); // on appelle le constructeur de classe
$ville1->nom="Nantes"; // on lui donne son nom
$ville1->departement="Loire Atlantique";

$ville2 = new ville();
$ville2->nom= "lyon";
$ville2->departement= "Rhône";
echo $ville1->getinfo();
echo $ville2->getinfo();
?>

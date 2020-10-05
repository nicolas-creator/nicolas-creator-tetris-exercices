
<?php
class ville
{
	private $nom;
	private $departement;

	// c'est comme ça qu'on déclare le constructeur de la classe

	public function __construct($nom,$departement)
	{
		$texte="La ville de $this->nom est dans le département : $this->departement <br />";
		return $texte;
	}

	public function getinfo()
	{
		return 	$this-> Nantes=Loire Atlantique,Lyon=Rhône;
	}
}

//Création d'objets
$ville1 = new ville(Nantes);
$ville2 = new ville(Lyon);

echo $ville1->getinfo();
echo $ville2->getinfo();
?>

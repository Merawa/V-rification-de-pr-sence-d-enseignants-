<?php
class Enseignant
{
	private $id; // L'identifiant de cet enseignant
	private $nom; // Le nom de cet enseignant
	private $heure; // L'heure de la vérification de cet enseignant
	private $dateV; // La date de vérification de cet enseignant
	
	public function _construct($id = 0, $nom = "", $heure = "", $dateV = "")
	{
		$this->id = $id;
		$this->nom = $nom;
		$this->heure = $heure;
		$this->dateV = $date;
	}
	
	public function getId()
	{
		return $id;
	}
	
	public function getNom()
	{
		return $nom;
	}
	
	public function getHeure()
	{
		return $heure;
	}
	
	public function getDateV()
	{
		return $dateV;
	}
	
	public function setID($id = 0)
	{
		$this->id = $id;
	}
	
	public function setNom($nom = "")
	{
		$this->nom = $nom;
	}
	
	public function setHeure($heure = "")
	{
		$this->heure = $heure;
	}
	
	public function setDateV($date = "")
	{
		$this->dateV = $dateV;
	}

}
?>
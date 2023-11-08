<?php
require "../Utils/ConnectController.php"
require "../Enseignant.php";

class EnseignantRepository
{
	private $databaseConnection;
	
	public function _construct($connectController = new ConnectController())
	{
		$this->databaseConnection = $connectController->getConnection();
	}
	
	public function ajouterEnseignant($nom, $heure, $date)
	{
		try
		{
			$maRequete = "INSERT INTO enseignant VALUES(?, ? , ?, ?,)";
			$instruction = $this->databaseConnection->prepare($maRequete);
			$instruction->execute(array(NULL,$nom,$heure,$date);
		}
		catch(PDOException $e)
		{
			echo "impossible d'ajouter un enseignant.";
		}
	}
	
	public function getEnseignant($id = 0)
	{
		try
		{
			$maRequete = "SELECT * FROM livres WHERE id=?";
			$resultats = $connexion->prepare($maRequete);
			$resultats->execute($id);
		}
		catch(PDOException $e)
		{
			print "impossible de trouver l'enseignant id ".id ;
		}
		$resultats = $resultats->fetchAll(PDO::FETCH_ASSOC);
		return $resultats;
	}
	
	public function getAllEnseignants()
	{
		try
		{
			$maRequete = "SELECT * FROM livres";
			$resultats = $connexion->prepare($maRequete);
			$resultats->execute(array());
		}
		catch(PDOException $e)
		{
			print "impossible de récuperer la liste des enseignants.";
		}
		$resultats = $resultats->fetchAll(PDO::FETCH_ASSOC);
		return $resultats;
	}
	
	public function supprimerEnseignant($id = 0)
	{
		global $databaseConnection;
		try
		{
			$maRequete = "DELETE FROM enseignant WHERE id=?";
			$instruction = $this->databaseConnection->prepare($maRequete);
			$instruction->execute($id);
		}
		catch(PDOException $e)
		{
			echo "impossible de supprimer l' enseignant id ".id;
		}
	}
	
	public function modifierEnseignant($id = 0, $nom = "", $heure = "", $date="")
	{
		global $databaseConnection;
		try
		{
			$maRequete = "UPDATE enseignant SET nom=?,heure=?,
			date=? WHERE id=?";
			$instruction = $this->databaseConnection->prepare($maRequete);
			$instruction->execute(array($nom,$heure,$date,$id);
		}
		catch(PDOException $e)
		{
			echo "impossible de modifier l' enseignant id ".id;
		}
	}

}
?>	
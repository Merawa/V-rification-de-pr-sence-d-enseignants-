<?php

// permet d'obtenir une connexion à la base de données
class ConnectController
{

	protected $server = "localhost"; // l'hote de la base de donnees
	
	protected $user = "root"; // le nom d'utilisateur de la base de données
	
	protected $password = ""; // le mot de passe de l'utilisateur
	
	protected $database = "cataloguebucrep"; // le nom de la base de donnée

	public $connect  = null;

	public function __construct()
	{
		try
		{
			$this->connect = new PDO("mysql:host=$this->server;dbname=".$this->database, $this->user,$this->password);
			//PDO::setAttribut(PDO::ATTR_MODE,PDO::ERR_MODE_)
		}
		catch(PDOException $e)
		{
			echo "impossible de se connecter à la base de données";
		}
	}

}

/*
 *  teste la connexion à la base de données
 *  param1 : $db : l'objet de type ConnectController
 */
function testConnectController($db)
{	
	$requete[] = 'SELECT * FROM usager'; 
	$requete[] = 'INSERT INTO usager VALUES(NULL,"a@gmail.com","sesame")';
	//$compteur = $db->connect->exec($requete[1]);
	$resultat = $db->connect->query($requete[0]);
	$ligneResultat = $resultat->fetchAll(PDO::FETCH_NUM);

	// pour chaque ligne
	foreach($ligneResultat as $ligne)
	{
			// pour chaque colonne
			foreach ($ligne as $colonne)
			{
				print "$colonne   ";
			}

			print "<br>";
	}

}

?>
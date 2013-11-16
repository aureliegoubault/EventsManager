<?php

namespace MyConventions\ListBundle\Fichier;

use MyConventions\ListBundle\Entity\Convention;

class MyConventionsFichier {
	
	// Fonction qui rŽcupre la liste des conventions
	public function getAll($file){
		
		$result = array();
		$conventions = file($file);
		foreach ($conventions as $convention){
			if(strlen(trim($convention))){
				$infos = explode("---", trim($convention));
				array_push($result, array("name" => $infos[0], "date" => $infos[1], "thumbnail" => $infos[2]));
			}
		}
		return $result;
		
	}
	
	// Fonction qui ajoute une convention ˆ la liste
	public function addConvention(Convention $convention,$file){
		
		$fp = fopen($file,"a");
		$date = $convention->getDate()->format('d F Y');
		fputs($fp, $convention->getName()."---".$date."---".$convention->getThumbnail()."\n");
		fclose($fp);
		
	}

}

?>

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
				array_push($result, array("name" => trim($convention)));
			}
		}
		return $result;
		
	}
	
	// Fonction qui ajoute une convention ˆ la liste
	public function addConvention(Convention $convention,$file){
		
		$fp = fopen($file,"a");
		fputs($fp, $convention->getName()."\n");
		fclose($fp);
		
	}

}

?>

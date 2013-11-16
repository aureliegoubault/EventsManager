<?php

namespace MyConventions\ListBundle\Fichier;

class MyConventionsFichier {
	
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

}

?>

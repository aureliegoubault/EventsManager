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
				array_push($result, array(
										"id" => $infos[0], 
										"name" => $infos[1], 
										"date" => $infos[2], 
										"thumbnail" => $infos[3],
										"location" => $infos[4],
										"enterprise" => $infos[5],
										"show" => $infos[6]
				));
			}
		}
		return $result;
		
	}
	
	// Fonction qui ajoute une convention ˆ la liste
	public function addConvention(Convention $convention,$file){
		
		// On recupere l'id de la derniere convention
		$file1 = file($file);
		$last_line = $file1[count($file1)-1];
		$infos = explode("---", trim($last_line));
		$id = (int) $infos[0];
		$new_id = $id+1;
		
		$fp = fopen($file,"a");
		
		//setlocale (LC_TIME, 'fr_FR');
		//$date = strftime("%d %B %Y", strtotime($convention->getDate()->getTimestamp()));
		$date = $convention->getDate()->format("d F Y");
		
		fputs($fp, $new_id."---".$convention->getName()."---".$date."---".$convention->getThumbnail()."---".$convention->getLocation()."---".$convention->getEnterprise()."---".$convention->getShow()."\n");
		fclose($fp);
		
	}
	
	// Fonction qui recupere une convention a partir de son id
	public function getConvention($id,$file){
	
		$conventions = file($file);
		foreach ($conventions as $convention){
			$infos = explode("---", trim($convention));
			if ($infos[0] == $id){
				$result = array(
							"id" => $infos[0], 
							"name" => $infos[1], 
							"date" => $infos[2], 
							"thumbnail" => $infos[3],
							"location" => $infos[4],
							"enterprise" => $infos[5],
							"show" => $infos[6]
				);
				break;
			}
		}
		return $result;
	
	}
	
	// Fonction qui supprime la convention identifiee par l'id passe en parametre
	public function deleteConvention($id,$file){
	
		$conventions = file($file);
		$new_file = "";
		foreach ($conventions as $convention){
			$infos = explode("---", trim($convention));
			if ($infos[0] != $id){
				$new_file .= $convention;
			}
		}
		
		// Ecriture dans le fichier de la nouvelle liste
		$fp = fopen($file,"w");
		fputs($fp, $new_file);
		fclose($fp);
	
	}

}

?>

<?php 

namespace AppBundle\Service;

class FormCommitService {
	
	/**
	 * Fait le commit sur repository
	 *
	 * @param string $path Chemin absolu du fichier
	 * @param string $nomFichier Nom du fichier
	 * @param string $submitContenu Contenu du fichier
	 * @param string $submitMessage Message du commit 
	 * @return bool True si le commit a été effectué, sinon return null
	 */
	public function commitRepository($path, $nomFichier, $submitContenu, $submitMessage=null){
		
		if(!empty($path) && 
			!empty($nomFichier) &&
			!empty($submitContenu)){
		
			if(!empty($submitMessage)){
				$submitMessage = "-m \"$submitMessage\"";
			}else{
				$submitMessage = '';
			}
			
			//écriture fichier + envoi git
			file_put_contents($path . '/' . $nomFichier, $submitContenu);
			chdir($path);
			//git add
			$resultAdd = 0;
			$output = array();
			exec(escapeshellcmd('git add "'.$nomFichier.'"'), $output, $resultAdd);
			if($resultAdd){
				throw new Exception("Problème lors de l'ajout de fichier 'git add'.");
			}else{					
				//git commit
				$resultCommit = 0;
				exec(escapeshellcmd('git commit "'.$submitMessage.'"'), $output, $resultCommit);
				if($resultCommit){
					throw new Exception('Problème lors de la mise à jour du fichier.');
				}else{
					return true;
				}
			}
		}else{
			return null;
		}
		
	}
}

?>
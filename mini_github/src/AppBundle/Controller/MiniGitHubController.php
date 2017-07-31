<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

use Symfony\Component\Config\FileLocator;

use AppBundle\Form\Type\FormCommitType;
use AppBundle\Service\FormCommitService;

class MiniGitHubController extends Controller{

	/**
	 * Affichage de formulaire
     * @Route("/", name="mini_github")
     */
    public function viewCommit(Request $request, FormCommitService $formCommitService){
		//récupération configuration pour chemain tmp dans fichier config.yml
		$tmp = $this->container->getParameter('path_tmp_repo');
		
		$errorMessage = array();
		$isCommit = false;
		
		//création formulaire
		$form = $this->createForm(FormCommitType::class);
			
			
		//gestion submit
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$dataForm = $form->getData();
			
			$submitGit = $dataForm['git'];
			$submitMessage =  $dataForm['message'];
			$submitNomFichier = $dataForm['nom'];
			$submitContenu =  $dataForm['contenu'];
			$submitEcraser = empty($dataForm['ecraser']) ? false : $dataForm['ecraser'];
			
			try {
				$output = array();
				
				$path = $tmp . 'repo' . $submitGit;
				$pathFile = $path . '/' . $submitNomFichier;
				//existance fichier pour création / écrasement
				if(file_exists($pathFile) && !$submitEcraser){
					//si le fichier existe mais pas cocher l'écrasement, ajout de écraser
					//$form->add('ecraser', 	CheckboxType::class, array('label' => 'Ecraser le fichier existant', 'required' => false));
					throw new Exception("$pathFile déjà existant, veuillez cocher \"écraser le fichier\" pour l'écraser");
					
				}elseif(!file_exists($pathFile) || 
					(file_exists($pathFile) && $submitEcraser)){
					if($formCommitService->commitRepository($path, $submitNomFichier, $submitContenu, $submitMessage)){
						$isCommit = true;
						//si commit ok, remet à 0 tous les champs du formulaire
						$form = $this->createForm(FormCommitType::class);
					}
					
				}
			} catch (IOExceptionInterface $e) {
				$errorMessage[] = "Erreur d'ouverture sur le fichier ".$e->getPath();
			} catch (Exception $e) {
				$errorMessage[] = $e->getMessage();
			}
		}
			
		//retour template
		$listeParam = array(
            'formulaire' => $form->createView(),
			'errorMessage' => $errorMessage,
			'isCommit' => $isCommit);
			
		
			
        return $this->render('mini_github/commit.twig', $listeParam);
    }

	
}

?>

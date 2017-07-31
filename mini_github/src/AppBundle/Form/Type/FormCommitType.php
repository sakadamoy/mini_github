<?php 

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class FormCommitType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
		$builder
			->add('git', 		ChoiceType::class, array(
				'choices'  => array(
					'repo1' => 1,
					'repo2' => 2,
					'repo3' => 3
				),
				'label' => "Dépot"
			))
			->add('message', 	TextType::class, array('label' => 'Message', 'required' => false))
            ->add('nom', 		TextType::class, array('label' => 'Nom du fichier'))
            ->add('contenu', 	TextareaType::class, array('label' => 'Contenu'))
            ->add('ecraser', 	CheckboxType::class, array('label' => 'Ecraser le fichier existant', 'required' => false))
			->add('submit', 	SubmitType::class, array('label' => 'Envoyer'));
	}
	
}

?>
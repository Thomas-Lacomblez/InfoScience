<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Utilisateurs;
use App\Form\InscriptionType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;


class SecurityController extends AbstractController
{
    /**
    * @route("/inscription", name ="security_inscription")
    */
   public function inscription(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
   {
        $user = new Utilisateurs();
        $form = $this->createForm(InscriptionType::class, $user);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $hash = $encoder->encodePassword($user, $user->getMotDePasse());
            $user->setMotDePasse($hash);
            $manager->persist($user);
            $manager->flush();
            
            return $this->redirectToRoute('security_connexion');
        }

        return $this->render('security\inscription.html.twig', [
            'form' => $form->createView()
        ]);
   }
   
   /**
    * @route("/connexion", name="security_connexion")
    */
   public function connexion()
   { 
       return $this->render('security\connexion.html.twig');
   }
   
   /**
    * @route("/deconnexion", name="security_deconnexion")
    */
   public function deconnexion() {}

}

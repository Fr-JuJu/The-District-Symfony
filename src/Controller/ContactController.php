<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {

        $contact = new Contact();

        $form = $this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $contact = $form->getData();
                $entityManager->persist($contact);
                $entityManager->flush();

                $email = (new Email())
                ->from('Missty@thedistrict.com')
                ->to('exemple@ex.com')
                ->subject('Re: Nous avons bien reçu votre contact')
                ->text('Bonjour !
                Nous avons bien reçu votre mail merci de patienter notre employer Missty vous répondra dans les plus bref délais
                Cordialement,
                Missty de l\'équipe The District.');

                try {
                    $mailer->send($email);
                } catch (TransportExceptionInterface $e) {

                }
                return $this->redirectToRoute('app_index');
            }

        
        return $this->render('contact/index.html.twig', [
            'form' => $form
        ]);
    }
}

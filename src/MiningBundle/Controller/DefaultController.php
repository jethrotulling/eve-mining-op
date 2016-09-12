<?php

namespace MiningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use MiningBundle\Entity\MiningOp;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MiningBundle:Default:index.html.twig');
    }

    public function newAction(Request $request)
    {

        $op = new MiningOp();
        $op->setDate(new \DateTime('now'));

        $form = $this->createFormBuilder($op)
            ->add('title', TextType::class)
            ->add('date', TimeType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Op'])
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && 0) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $em = $this->getDoctrine()->getManager();
            // $em->persist($task);
            // $em->flush();

            return $this->redirectToRoute('mining_detail');
        }



        return $this->render('MiningBundle:Default:new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

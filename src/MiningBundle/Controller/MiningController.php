<?php

namespace MiningBundle\Controller;

use MiningBundle\Entity\Character;
use MiningBundle\Entity\Item;
use MiningBundle\Entity\ItemGroup;
use MiningBundle\Entity\LootLog;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

//use Symfony\Component\HttpFoundation\File\UploadedFile;


use MiningBundle\Entity\MiningOp;

class MiningController extends Controller
{

    public function newAction(Request $request)
    {

        $date = new \DateTime('now');

        $op = new MiningOp();
        $op->setStartTime($date);
        $op->setFinishTime($date);

        $form = $this->createFormBuilder($op)
            ->add('title', TextType::class, ['attr' => ['class' => 'form-control']])
            ->add('startTime', DateTimeType::class)
            ->add('finishTime', DateTimeType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Op', 'attr' => ['class' => 'btn btn-default']])
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $op = $form->getData();
            $op->setHash(hash('sha256', uniqid().'-'.date('Y-m-d H:i:s')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($op);
            $em->flush();

            return $this->redirectToRoute('mining_detail', ['hash' => $op->getHash()]);
        }

        return $this->render('MiningBundle:Default:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function detailAction($hash, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $opRepo = $em->getRepository('MiningBundle:MiningOp');
        $op = $opRepo->findOneByHash($hash);

        if (!$op) {
            return $this->redirectToRoute('mining_homepage');
        }

        $form = $this->createFormBuilder()
            ->add('submitFile', FileType::class, ['label' => 'Upload Loot Log'])
            ->add('save', SubmitType::class, ['label' => 'Upload'])
            ->getForm()
        ;

        $lootRepo = $em->getRepository('MiningBundle:LootLog');
        $minerQuery = $lootRepo->createQueryBuilder('l')
            ->innerJoin('l.miningOp', 'o')
            ->innerJoin('l.character', 'c')
            ->where('o.id = :id')
            ->groupBy('c.id')
            ->orderBy('c.name', 'ASC')
            ->setParameter('id', $op->getId())
            ->getQuery()
        ;

        $miners = $minerQuery->getResult();

        return $this->render('MiningBundle:Default:detail.html.twig', [
            'title' => $op->getTitle(),
            'form' => $form->createView(),
            'miningOp' => $op,
            'lootLog' => $op->getLootLog(),
            'miners' => $miners
        ]);
    }

    public function processAction($hash, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $op = $em->getRepository('MiningBundle:MiningOp')->findOneByHash($hash);

        if (!$op) {
            return $this->redirectToRoute('mining_homepage');
        }

        // Your Controller.php
        $form = $this->createFormBuilder()
            ->add('submitFile', FileType::class, ['label' => 'File to Submit'])
            ->add('save', SubmitType::class, ['label' => 'Upload'])
            ->getForm()
        ;

        // Bind request to the form
        $form->handleRequest($request);

        if ($form->isValid()) {

            // Get item and group repos
            $itemRepo      = $em->getRepository('MiningBundle:Item');
            $groupRepo     = $em->getRepository('MiningBundle:ItemGroup');
            $characterRepo = $em->getRepository('MiningBundle:Character');
            $logItemRepo   = $em->getRepository('MiningBundle:LootLog');

            // A way to cache items/groups
            $items      = [];
            $groups     = [];
            $characters = [];

            // @TODO: Check op date/time before inserting
            // @TODO: Also dont allow duplicates

            $csv = $form->get('submitFile')->getData();

            if (($handle = fopen($csv->getRealPath(), "r")) !== false) {
                $i = 0;
                while (($data = fgetcsv($handle, null, "\t")) !== false) {
                    $i++;
                    // Ignore first line (Header)
                    if ($i == 1 || count($data) < 5) {
                        continue;
                    }

                    if (isset($groups[$data[4]])) {
                        $group = $groups[$data[4]];
                    } elseif (!$group = $groupRepo->findOneByName($data[4])) {
                        $group = new ItemGroup();
                        $group->setName($data[4]);

                        $em->persist($group);
                        $em->flush();

                        $groups[$data[4]] = $group;
                    } else {
                        $groups[$data[4]] = $group;
                    }

                    if (isset($items[$data[2]])) {
                        $item = $items[$data[2]];
                    } elseif (!$item = $itemRepo->findOneByName($data[2])) {
                        $item = new Item();
                        $item->setName($data[2]);
                        $item->setItemGroup($group);

                        $em->persist($item);
                        $em->flush();

                        $items[$data[2]] = $item;
                    } else {
                        $items[$data[2]] = $item;
                    }

                    if (isset($characters[$data[1]])) {
                        $character = $characters[$data[1]];
                    } elseif (!$character = $characterRepo->findOneByName($data[1])) {
                        $character = new Character();
                        $character->setName($data[1]);

                        $em->persist($character);
                        $em->flush();

                        $characters[$data[1]] = $character;
                    } else {
                        $characters[$data[1]] = $character;
                    }

                    // Replace dots with dash
                    // format: Y-m-d H:i:s
                    $time = $bodytag = str_replace('.', '-', $data[0].':00');

                    $date = new \DateTime($time);

                    // qty mined
                    $quantity = $data[3];

                    $logItem = $logItemRepo->findOneBy([
                        'item' => $item->getId(),
                        'character' => $character->getId(),
                        'miningOp' => $op->getId(),
                        'quantity' => $quantity,
                        'time' => $date
                    ]);

                    if (!$logItem) {
                        $logItem = new LootLog();
                        $logItem->setItemGroup($group)
                                ->setItem($item)
                                ->setCharacter($character)
                                ->setMiningOp($op)
                                ->setQuantity($quantity)
                                ->setTime($date);

                        $em->persist($logItem);
                        $em->flush();
                    }
                }
                fclose($handle);
            }
        }

        return $this->redirectToRoute('mining_detail', ['hash' => $hash]);
    }

}

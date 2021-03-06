<?php

namespace GamerBundle\Controller;

use GamerBundle\Entity\Partie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use GamerBundle\Entity\Image;

/**
 * Partie controller.
 *
 * @Route("/")
 */
class PartieController extends Controller
{
    /**
     * Lists all partie entities.
     *
     * @Route("/", name="partie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $parties = $em->getRepository('GamerBundle:Partie')->findAll();

        return $this->render('@Gamer/partie/index.html.twig', array(
            'parties' => $parties,
        ));
    }

    /**
     * Creates a new partie entity.
     *
     * @Route("/new", name="partie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $image = new Image;
        $partie = new Partie();
        $partie ->addImage($image);
        $form = $this->createForm('GamerBundle\Form\PartieType', $partie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($partie->getImages() as $image){

                $fileName = md5(uniqid()) . '.' . $image->getPhoto()->guessExtension();
                $image->getPhoto()->move(
                    $this->getParameter('photo_partie_directory'),
                    $fileName
                );

                $usr = $this->get('security.context')->getToken()->getUser();
                $usr->setMeneur(true);
                $em->persist($usr);


                $image->setPhoto($fileName);
                $partie->addImage($image);

            }

            $em->persist($partie);
            $em->flush();



            return $this->redirectToRoute('partie_show', array('id' => $partie->getId()));

        }

        return $this->render('@Gamer/partie/new.html.twig', array(
            'partie' => $partie,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/dashboard/{id}")
     */
    public function dashBoardMeneurAction(Partie $partie)
    {
//        path('NOMDUPATH', {'id'=> partie.id})
//        $partie = new Partie();
//        $image = new Image();

        $em = $this->getDoctrine()->getManager();

        $images = $em->getRepository('GamerBundle:Image')->findBy(array('partie' => $partie));

        return $this->render('@Gamer/partie/dashBoardMeneur.html.twig', array(
            'partie' => $partie,
            'images' => $images,
        ));

    }

    /**
     *
     * @Route("/winner", name="winner")
     *
     */
    public function WinnerAction()
    {
        return $this->render('@Gamer/partie/winner.html.twig', array());
    }

    /**
     *
     * @Route("/looser", name="looser")
     *
     */
    public function LooserAction()
    {
        return $this->render('@Gamer/partie/looser.html.twig', array());
    }

    /**
     * @Route("/dashboardjoueur/{id}",name="gamer_partie_dashboardjoueur")
     * @param Request $request
     * @param Partie $partie
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function dashBoardJoueurAction(Request $request, Partie $partie)
    {
        $image = new Image();
        $form = $this->createForm('GamerBundle\Form\ImageType', $image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $image->getPhoto();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('photo_partie_directory'),
                $fileName
            );

            $image->setPhoto($fileName);
            $partie->addImage($image);


            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush($image);

            return $this->redirectToRoute('partie_index', array(
                'id' => $image->getId()

            ));
        }

        return $this->render('@Gamer/partie/dashBoardJoueur.html.twig', array(
            'partie' => $partie,
            'form'=> $form->createView(),
        ));
    }

    /**
     * Finds and displays a partie entity.
     *
     * @Route("/{id}", name="partie_show")
     * @Method("GET")
     */
    public function showAction(Partie $partie)
    {
        $deleteForm = $this->createDeleteForm($partie);

        return $this->render('@Gamer/partie/show.html.twig', array(
            'partie' => $partie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing partie entity.
     *
     * @Route("/{id}/edit", name="partie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Partie $partie)
    {
        $deleteForm = $this->createDeleteForm($partie);
        $editForm = $this->createForm('GamerBundle\Form\PartieType', $partie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partie_edit', array('id' => $partie->getId()));
        }

        return $this->render('@Gamer/partie/edit.html.twig', array(
            'partie' => $partie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a partie entity.
     *
     * @Route("/{id}", name="partie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Partie $partie)
    {
        $form = $this->createDeleteForm($partie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($partie);
            $em->flush($partie);
        }

        return $this->redirectToRoute('partie_index');
    }

    /**
     * Creates a form to delete a partie entity.
     *
     * @param Partie $partie The partie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Partie $partie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('partie_delete', array('id' => $partie->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}

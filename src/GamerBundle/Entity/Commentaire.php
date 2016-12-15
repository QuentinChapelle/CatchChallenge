<?php

namespace GamerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="GamerBundle\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @ORM\ManyToOne(targetEntity="Partie", inversedBy="commentaires")
     */
    private $partie;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set partie
     *
     * @param \GamerBundle\Entity\partie $partie
     * @return Commentaire
     */
    public function setPartie(\GamerBundle\Entity\partie $partie = null)
    {
        $this->partie = $partie;

        return $this;
    }

    /**
     * Get partie
     *
     * @return \GamerBundle\Entity\partie 
     */
    public function getPartie()
    {
        return $this->partie;
    }
}

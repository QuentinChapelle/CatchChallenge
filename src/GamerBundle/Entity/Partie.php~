<?php

namespace GamerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partie
 *
 * @ORM\Table(name="partie")
 * @ORM\Entity(repositoryClass="GamerBundle\Repository\PartieRepository")
 */
class Partie
{
    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="partie")
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="partie")
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\User", mappedBy="partie")
     */
    private $users;

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="datetime")
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", nullable=true)
     */
    private $texte;


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
     * Set nom
     *
     * @param string $nom
     * @return Partie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set duree
     *
     * @param \DateTime $duree
     * @return Partie
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Partie
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Partie
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Partie
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add images
     *
     * @param \GamerBundle\Entity\image $images
     * @return Partie
     */
    public function addImage(\GamerBundle\Entity\image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \GamerBundle\Entity\image $images
     */
    public function removeImage(\GamerBundle\Entity\image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add users
     *
     * @param \GamerBundle\Entity\user $users
     * @return Partie
     */
    public function addUser(\GamerBundle\Entity\user $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \GamerBundle\Entity\user $users
     */
    public function removeUser(\GamerBundle\Entity\user $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add commentaires
     *
     * @param \GamerBundle\Entity\commentaire $commentaires
     * @return Partie
     */
    public function addCommentaire(\GamerBundle\Entity\commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \GamerBundle\Entity\commentaire $commentaires
     */
    public function removeCommentaire(\GamerBundle\Entity\commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
}

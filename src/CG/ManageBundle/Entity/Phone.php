<?php

namespace CG\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Phone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="num_p", type="string", length=255)
     */
    private $numP;
    
    /**
     * @var string
     * @ORM\Column(name="tag_p", type="string", length=64)
     */
    private $tagP;

    /**
     * Get id
     *
     * @return integer 
     */
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Client")
     * @JoinColumn(name="client_id", mappedBy="phoneC", nullable=false)
     */
    private $client;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numP
     *
     * @param string $numP
     * @return Phone
     */
    public function setNumP($numP)
    {
        $this->numP = $numP;
    
        return $this;
    }

    /**
     * Get numP
     *
     * @return string 
     */
    public function getNumP()
    {
        return $this->numP;
    }

    /**
     * Set tagP
     *
     * @param string $tagP
     * @return Phone
     */
    public function setTagP($tagP)
    {
        $this->tagP = $tagP;
    
        return $this;
    }

    /**
     * Get tagP
     *
     * @return string 
     */
    public function getTagP()
    {
        return $this->tagP;
    }
}
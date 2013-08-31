<?php

namespace CG\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CG\ManageBundle\Entity\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="nom_soc", type="string", length=255)
     */
    private $nomSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="addr_soc", type="string", length=255)
     */
    private $addrSoc;


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
     * Set nomSoc
     *
     * @param string $nomSoc
     * @return Client
     */
    public function setNomSoc($nomSoc)
    {
        $this->nomSoc = $nomSoc;
    
        return $this;
    }

    /**
     * Get nomSoc
     *
     * @return string 
     */
    public function getNomSoc()
    {
        return $this->nomSoc;
    }

    /**
     * Set addrSoc
     *
     * @param string $addrSoc
     * @return Client
     */
    public function setAddrSoc($addrSoc)
    {
        $this->addrSoc = $addrSoc;
    
        return $this;
    }

    /**
     * Get addrSoc
     *
     * @return string 
     */
    public function getAddrSoc()
    {
        return $this->addrSoc;
    }
}

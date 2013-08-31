<?php

namespace CG\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Email
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
     * @ORM\Column(name="mail_addr", type="string", length=255)
     */
    private $mailAddr;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=64)
     */
    private $tag;


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
     * Set mailAddr
     *
     * @param string $mailAddr
     * @return Email
     */
    public function setMailAddr($mailAddr)
    {
        $this->mailAddr = $mailAddr;
    
        return $this;
    }

    /**
     * Get mailAddr
     *
     * @return string 
     */
    public function getMailAddr()
    {
        return $this->mailAddr;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return Email
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }
}

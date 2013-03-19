<?php

namespace Pion\DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Authors
 *
 * @ORM\Table(name="authors")
 * @ORM\Entity
 */
class Authors
{
    /**
     * @var integer
     *
     * @ORM\Column(name="recno", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="authors_recno_seq", allocationSize=1, initialValue=1)
     */
    private $recno;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=100, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="paperid", type="string", nullable=false)
     */
    private $paperid;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="smallint", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="designator", type="string", nullable=true)
     */
    private $designator;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_normalised", type="string", nullable=true)
     */
    private $lastNameNormalised;

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", nullable=true)
     */
    private $suffix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="corresp_auth", type="boolean", nullable=true)
     */
    private $correspAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="footnote", type="string", length=1000, nullable=true)
     */
    private $footnote;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=500, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="affilnum", type="smallint", nullable=true)
     */
    private $affilnum;

    /**
     * @var string
     *
     * @ORM\Column(name="talk_id", type="string", length=8, nullable=true)
     */
    private $talkId;



    /**
     * Get recno
     *
     * @return integer 
     */
    public function getRecno()
    {
        return $this->recno;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Authors
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Authors
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set paperid
     *
     * @param string $paperid
     * @return Authors
     */
    public function setPaperid($paperid)
    {
        $this->paperid = $paperid;
    
        return $this;
    }

    /**
     * Get paperid
     *
     * @return string 
     */
    public function getPaperid()
    {
        return $this->paperid;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Authors
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set designator
     *
     * @param string $designator
     * @return Authors
     */
    public function setDesignator($designator)
    {
        $this->designator = $designator;
    
        return $this;
    }

    /**
     * Get designator
     *
     * @return string 
     */
    public function getDesignator()
    {
        return $this->designator;
    }

    /**
     * Set lastNameNormalised
     *
     * @param string $lastNameNormalised
     * @return Authors
     */
    public function setLastNameNormalised($lastNameNormalised)
    {
        $this->lastNameNormalised = $lastNameNormalised;
    
        return $this;
    }

    /**
     * Get lastNameNormalised
     *
     * @return string 
     */
    public function getLastNameNormalised()
    {
        return $this->lastNameNormalised;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     * @return Authors
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    
        return $this;
    }

    /**
     * Get suffix
     *
     * @return string 
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set correspAuth
     *
     * @param boolean $correspAuth
     * @return Authors
     */
    public function setCorrespAuth($correspAuth)
    {
        $this->correspAuth = $correspAuth;
    
        return $this;
    }

    /**
     * Get correspAuth
     *
     * @return boolean 
     */
    public function getCorrespAuth()
    {
        return $this->correspAuth;
    }

    /**
     * Set footnote
     *
     * @param string $footnote
     * @return Authors
     */
    public function setFootnote($footnote)
    {
        $this->footnote = $footnote;
    
        return $this;
    }

    /**
     * Get footnote
     *
     * @return string 
     */
    public function getFootnote()
    {
        return $this->footnote;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Authors
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set affilnum
     *
     * @param integer $affilnum
     * @return Authors
     */
    public function setAffilnum($affilnum)
    {
        $this->affilnum = $affilnum;
    
        return $this;
    }

    /**
     * Get affilnum
     *
     * @return integer 
     */
    public function getAffilnum()
    {
        return $this->affilnum;
    }

    /**
     * Set talkId
     *
     * @param string $talkId
     * @return Authors
     */
    public function setTalkId($talkId)
    {
        $this->talkId = $talkId;
    
        return $this;
    }

    /**
     * Get talkId
     *
     * @return string 
     */
    public function getTalkId()
    {
        return $this->talkId;
    }
}
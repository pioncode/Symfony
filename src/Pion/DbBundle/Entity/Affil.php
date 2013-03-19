<?php

namespace Pion\DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affil
 *
 * @ORM\Table(name="affil")
 * @ORM\Entity
 */
class Affil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="affil_key_seq", allocationSize=1, initialValue=1)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="paperid", type="string", length=50, nullable=false)
     */
    private $paperid;

    /**
     * @var integer
     *
     * @ORM\Column(name="affilnum", type="smallint", nullable=false)
     */
    private $affilnum;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=1000, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="talk_id", type="string", length=8, nullable=true)
     */
    private $talkId;



    /**
     * Get key
     *
     * @return integer 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set paperid
     *
     * @param string $paperid
     * @return Affil
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
     * Set affilnum
     *
     * @param integer $affilnum
     * @return Affil
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
     * Set address
     *
     * @param string $address
     * @return Affil
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set talkId
     *
     * @param string $talkId
     * @return Affil
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
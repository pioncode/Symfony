<?php

namespace Pion\DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Misc
 *
 * @ORM\Table(name="misc")
 * @ORM\Entity
 */
class Misc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="misc_key_seq", allocationSize=1, initialValue=1)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="link_title", type="string", length=500, nullable=false)
     */
    private $linkTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="string", length=10000, nullable=true)
     */
    private $caption;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="smallint", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="paperid", type="string", nullable=false)
     */
    private $paperid;

    /**
     * @var integer
     *
     * @ORM\Column(name="x", type="smallint", nullable=true)
     */
    private $x;

    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="smallint", nullable=true)
     */
    private $y;

    /**
     * @var integer
     *
     * @ORM\Column(name="border", type="smallint", nullable=true)
     */
    private $border;



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
     * Set url
     *
     * @param string $url
     * @return Misc
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set linkTitle
     *
     * @param string $linkTitle
     * @return Misc
     */
    public function setLinkTitle($linkTitle)
    {
        $this->linkTitle = $linkTitle;
    
        return $this;
    }

    /**
     * Get linkTitle
     *
     * @return string 
     */
    public function getLinkTitle()
    {
        return $this->linkTitle;
    }

    /**
     * Set caption
     *
     * @param string $caption
     * @return Misc
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    
        return $this;
    }

    /**
     * Get caption
     *
     * @return string 
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Misc
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
     * Set paperid
     *
     * @param string $paperid
     * @return Misc
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
     * Set x
     *
     * @param integer $x
     * @return Misc
     */
    public function setX($x)
    {
        $this->x = $x;
    
        return $this;
    }

    /**
     * Get x
     *
     * @return integer 
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     * @return Misc
     */
    public function setY($y)
    {
        $this->y = $y;
    
        return $this;
    }

    /**
     * Get y
     *
     * @return integer 
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set border
     *
     * @param integer $border
     * @return Misc
     */
    public function setBorder($border)
    {
        $this->border = $border;
    
        return $this;
    }

    /**
     * Get border
     *
     * @return integer 
     */
    public function getBorder()
    {
        return $this->border;
    }
}
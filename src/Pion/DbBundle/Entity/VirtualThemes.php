<?php

namespace Pion\DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VirtualThemes
 *
 * @ORM\Table(name="virtual_themes")
 * @ORM\Entity
 */
class VirtualThemes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="virtual_theme_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="virtual_themes_virtual_theme_id_seq", allocationSize=1, initialValue=1)
     */
    private $virtualThemeId;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", nullable=false)
     */
    private $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="theme_title", type="string", length=50, nullable=false)
     */
    private $themeTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="artist_name", type="text", nullable=true)
     */
    private $artistName;

    /**
     * @var string
     *
     * @ORM\Column(name="guesteds", type="text", nullable=true)
     */
    private $guesteds;

    /**
     * @var integer
     *
     * @ORM\Column(name="paper_order", type="integer", nullable=true)
     */
    private $paperOrder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="openaccess", type="boolean", nullable=false)
     */
    private $openaccess;



    /**
     * Get virtualThemeId
     *
     * @return integer 
     */
    public function getVirtualThemeId()
    {
        return $this->virtualThemeId;
    }

    /**
     * Set journal
     *
     * @param string $journal
     * @return VirtualThemes
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
    
        return $this;
    }

    /**
     * Get journal
     *
     * @return string 
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set themeTitle
     *
     * @param string $themeTitle
     * @return VirtualThemes
     */
    public function setThemeTitle($themeTitle)
    {
        $this->themeTitle = $themeTitle;
    
        return $this;
    }

    /**
     * Get themeTitle
     *
     * @return string 
     */
    public function getThemeTitle()
    {
        return $this->themeTitle;
    }

    /**
     * Set artistName
     *
     * @param string $artistName
     * @return VirtualThemes
     */
    public function setArtistName($artistName)
    {
        $this->artistName = $artistName;
    
        return $this;
    }

    /**
     * Get artistName
     *
     * @return string 
     */
    public function getArtistName()
    {
        return $this->artistName;
    }

    /**
     * Set guesteds
     *
     * @param string $guesteds
     * @return VirtualThemes
     */
    public function setGuesteds($guesteds)
    {
        $this->guesteds = $guesteds;
    
        return $this;
    }

    /**
     * Get guesteds
     *
     * @return string 
     */
    public function getGuesteds()
    {
        return $this->guesteds;
    }

    /**
     * Set paperOrder
     *
     * @param integer $paperOrder
     * @return VirtualThemes
     */
    public function setPaperOrder($paperOrder)
    {
        $this->paperOrder = $paperOrder;
    
        return $this;
    }

    /**
     * Get paperOrder
     *
     * @return integer 
     */
    public function getPaperOrder()
    {
        return $this->paperOrder;
    }

    /**
     * Set openaccess
     *
     * @param boolean $openaccess
     * @return VirtualThemes
     */
    public function setOpenaccess($openaccess)
    {
        $this->openaccess = $openaccess;
    
        return $this;
    }

    /**
     * Get openaccess
     *
     * @return boolean 
     */
    public function getOpenaccess()
    {
        return $this->openaccess;
    }
}
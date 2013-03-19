<?php

namespace Pion\DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Issues
 *
 * @ORM\Table(name="issues")
 * @ORM\Entity
 */
class Issues
{
    /**
     * @var integer
     *
     * @ORM\Column(name="key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="issues_key_seq", allocationSize=1, initialValue=1)
     */
    private $key;

    /**
     * @var integer
     *
     * @ORM\Column(name="volume", type="smallint", nullable=false)
     */
    private $volume;

    /**
     * @var integer
     *
     * @ORM\Column(name="issue", type="smallint", nullable=false)
     */
    private $issue;

    /**
     * @var integer
     *
     * @ORM\Column(name="issuetype", type="smallint", nullable=false)
     */
    private $issuetype;

    /**
     * @var string
     *
     * @ORM\Column(name="heading", type="string", length=200, nullable=true)
     */
    private $heading;

    /**
     * @var string
     *
     * @ORM\Column(name="subheading", type="string", length=200, nullable=true)
     */
    private $subheading;

    /**
     * @var string
     *
     * @ORM\Column(name="guesteds", type="string", length=200, nullable=true)
     */
    private $guesteds;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", nullable=false)
     */
    private $journal;

    /**
     * @var integer
     *
     * @ORM\Column(name="online", type="smallint", nullable=true)
     */
    private $online;

    /**
     * @var integer
     *
     * @ORM\Column(name="theme_end", type="smallint", nullable=true)
     */
    private $themeEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="theme_start", type="smallint", nullable=true)
     */
    private $themeStart;

    /**
     * @var string
     *
     * @ORM\Column(name="heading2", type="string", length=200, nullable=true)
     */
    private $heading2;

    /**
     * @var string
     *
     * @ORM\Column(name="subheading2", type="string", length=200, nullable=true)
     */
    private $subheading2;

    /**
     * @var string
     *
     * @ORM\Column(name="guesteds2", type="string", length=200, nullable=true)
     */
    private $guesteds2;

    /**
     * @var integer
     *
     * @ORM\Column(name="theme_start2", type="smallint", nullable=true)
     */
    private $themeStart2;

    /**
     * @var integer
     *
     * @ORM\Column(name="theme_end2", type="smallint", nullable=true)
     */
    private $themeEnd2;

    /**
     * @var string
     *
     * @ORM\Column(name="addendum", type="string", length=2000, nullable=true)
     */
    private $addendum;

    /**
     * @var string
     *
     * @ORM\Column(name="ptype14", type="string", length=80, nullable=true)
     */
    private $ptype14;



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
     * Set volume
     *
     * @param integer $volume
     * @return Issues
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    
        return $this;
    }

    /**
     * Get volume
     *
     * @return integer 
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set issue
     *
     * @param integer $issue
     * @return Issues
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
    
        return $this;
    }

    /**
     * Get issue
     *
     * @return integer 
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set issuetype
     *
     * @param integer $issuetype
     * @return Issues
     */
    public function setIssuetype($issuetype)
    {
        $this->issuetype = $issuetype;
    
        return $this;
    }

    /**
     * Get issuetype
     *
     * @return integer 
     */
    public function getIssuetype()
    {
        return $this->issuetype;
    }

    /**
     * Set heading
     *
     * @param string $heading
     * @return Issues
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;
    
        return $this;
    }

    /**
     * Get heading
     *
     * @return string 
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * Set subheading
     *
     * @param string $subheading
     * @return Issues
     */
    public function setSubheading($subheading)
    {
        $this->subheading = $subheading;
    
        return $this;
    }

    /**
     * Get subheading
     *
     * @return string 
     */
    public function getSubheading()
    {
        return $this->subheading;
    }

    /**
     * Set guesteds
     *
     * @param string $guesteds
     * @return Issues
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
     * Set journal
     *
     * @param string $journal
     * @return Issues
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
     * Set online
     *
     * @param integer $online
     * @return Issues
     */
    public function setOnline($online)
    {
        $this->online = $online;
    
        return $this;
    }

    /**
     * Get online
     *
     * @return integer 
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set themeEnd
     *
     * @param integer $themeEnd
     * @return Issues
     */
    public function setThemeEnd($themeEnd)
    {
        $this->themeEnd = $themeEnd;
    
        return $this;
    }

    /**
     * Get themeEnd
     *
     * @return integer 
     */
    public function getThemeEnd()
    {
        return $this->themeEnd;
    }

    /**
     * Set themeStart
     *
     * @param integer $themeStart
     * @return Issues
     */
    public function setThemeStart($themeStart)
    {
        $this->themeStart = $themeStart;
    
        return $this;
    }

    /**
     * Get themeStart
     *
     * @return integer 
     */
    public function getThemeStart()
    {
        return $this->themeStart;
    }

    /**
     * Set heading2
     *
     * @param string $heading2
     * @return Issues
     */
    public function setHeading2($heading2)
    {
        $this->heading2 = $heading2;
    
        return $this;
    }

    /**
     * Get heading2
     *
     * @return string 
     */
    public function getHeading2()
    {
        return $this->heading2;
    }

    /**
     * Set subheading2
     *
     * @param string $subheading2
     * @return Issues
     */
    public function setSubheading2($subheading2)
    {
        $this->subheading2 = $subheading2;
    
        return $this;
    }

    /**
     * Get subheading2
     *
     * @return string 
     */
    public function getSubheading2()
    {
        return $this->subheading2;
    }

    /**
     * Set guesteds2
     *
     * @param string $guesteds2
     * @return Issues
     */
    public function setGuesteds2($guesteds2)
    {
        $this->guesteds2 = $guesteds2;
    
        return $this;
    }

    /**
     * Get guesteds2
     *
     * @return string 
     */
    public function getGuesteds2()
    {
        return $this->guesteds2;
    }

    /**
     * Set themeStart2
     *
     * @param integer $themeStart2
     * @return Issues
     */
    public function setThemeStart2($themeStart2)
    {
        $this->themeStart2 = $themeStart2;
    
        return $this;
    }

    /**
     * Get themeStart2
     *
     * @return integer 
     */
    public function getThemeStart2()
    {
        return $this->themeStart2;
    }

    /**
     * Set themeEnd2
     *
     * @param integer $themeEnd2
     * @return Issues
     */
    public function setThemeEnd2($themeEnd2)
    {
        $this->themeEnd2 = $themeEnd2;
    
        return $this;
    }

    /**
     * Get themeEnd2
     *
     * @return integer 
     */
    public function getThemeEnd2()
    {
        return $this->themeEnd2;
    }

    /**
     * Set addendum
     *
     * @param string $addendum
     * @return Issues
     */
    public function setAddendum($addendum)
    {
        $this->addendum = $addendum;
    
        return $this;
    }

    /**
     * Get addendum
     *
     * @return string 
     */
    public function getAddendum()
    {
        return $this->addendum;
    }

    /**
     * Set ptype14
     *
     * @param string $ptype14
     * @return Issues
     */
    public function setPtype14($ptype14)
    {
        $this->ptype14 = $ptype14;
    
        return $this;
    }

    /**
     * Get ptype14
     *
     * @return string 
     */
    public function getPtype14()
    {
        return $this->ptype14;
    }
}
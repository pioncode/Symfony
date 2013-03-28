<?php

namespace Pion\DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Papers
 *
 * @ORM\Table(name="papers")
 * @ORM\Entity
 */
class Papers
{
    /**
     * @var string
     *
     * @ORM\Column(name="paperid", type="string", nullable=false, unique=true)
     * @ORM\Id
     * _@ORM\GeneratedValue(strategy="SEQUENCE")
     * _@ORM\SequenceGenerator(sequenceName="papers_paperid_test_seq", allocationSize=1, initialValue=1)
     */
    private $paperid;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", nullable=true)
     */
    private $journal;

    /**
     * @var integer
     *
     * @ORM\Column(name="volume", type="smallint", nullable=true)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", nullable=true)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="issue", type="smallint", nullable=true)
     */
    private $issue;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=300, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="received", type="string", length=2000, nullable=true)
     */
    private $received;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="string", length=10000, nullable=true)
     */
    private $abstract;

    /**
     * @var integer
     *
     * @ORM\Column(name="start_page", type="smallint", nullable=true)
     */
    private $startPage;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_page", type="smallint", nullable=true)
     */
    private $endPage;

    /**
     * @var integer
     *
     * @ORM\Column(name="ptype", type="integer", nullable=true)
     */
    private $ptype;

    /**
     * @var string
     *
     * @ORM\Column(name="misc", type="string", length=50, nullable=true)
     */
    private $misc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="changed", type="datetime", nullable=true)
     */
    private $changed;

    /**
     * @var string
     *
     * @ORM\Column(name="same_as", type="string", length=8, nullable=true)
     */
    private $sameAs;

    /**
     * @var string
     *
     * @ORM\Column(name="page_prefix", type="string", nullable=true)
     */
    private $pagePrefix;

    /**
     * @var string
     *
     * @ORM\Column(name="misc_preamble", type="string", length=2000, nullable=true)
     */
    private $miscPreamble;

    /**
     * @var string
     *
     * @ORM\Column(name="misc_postamble", type="string", length=2000, nullable=true)
     */
    private $miscPostamble;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="online", type="date", nullable=true)
     */
    private $online;

    /**
     * @var integer
     *
     * @ORM\Column(name="virtual_theme", type="integer", nullable=true)
     */
    private $virtualTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="talk_id", type="string", length=8, nullable=true)
     */
    private $talkId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tlk_startp", type="integer", nullable=true)
     */
    private $tlkStartp;

    /**
     * @var integer
     *
     * @ORM\Column(name="tlk_endpg", type="integer", nullable=true)
     */
    private $tlkEndpg;

    /**
     * @var integer
     *
     * @ORM\Column(name="virtual_issue_order", type="integer", nullable=true)
     */
    private $virtualIssueOrder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="virtual_only", type="boolean", nullable=true)
     */
    private $virtualOnly;

    /**
     * @var string
     *
     * @ORM\Column(name="paperchain", type="string", nullable=true)
     */
    private $paperchain;

    /**
     * @var string
     *
     * @ORM\Column(name="paperchain_id", type="string", nullable=true)
     */
    private $paperchainId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="open_access", type="boolean", nullable=true)
     */
    private $openAccess;

    /**
     * @var boolean
     *
     * @ORM\Column(name="internal_only", type="boolean", nullable=false)
     */
    private $internalOnly;

    /**
     * Set paperid
     *
     * @param string $journal
     * @return Papers
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
     * Set journal
     *
     * @param string $journal
     * @return Papers
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
     * Set volume
     *
     * @param integer $volume
     * @return Papers
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
     * Set year
     *
     * @param string $year
     * @return Papers
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set issue
     *
     * @param integer $issue
     * @return Papers
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
     * Set title
     *
     * @param string $title
     * @return Papers
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set received
     *
     * @param string $received
     * @return Papers
     */
    public function setReceived($received)
    {
        $this->received = $received;
    
        return $this;
    }

    /**
     * Get received
     *
     * @return string 
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Set abstract
     *
     * @param string $abstract
     * @return Papers
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    
        return $this;
    }

    /**
     * Get abstract
     *
     * @return string 
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set startPage
     *
     * @param integer $startPage
     * @return Papers
     */
    public function setStartPage($startPage)
    {
        $this->startPage = $startPage;
    
        return $this;
    }

    /**
     * Get startPage
     *
     * @return integer 
     */
    public function getStartPage()
    {
        return $this->startPage;
    }

    /**
     * Set endPage
     *
     * @param integer $endPage
     * @return Papers
     */
    public function setEndPage($endPage)
    {
        $this->endPage = $endPage;
    
        return $this;
    }

    /**
     * Get endPage
     *
     * @return integer 
     */
    public function getEndPage()
    {
        return $this->endPage;
    }

    /**
     * Set ptype
     *
     * @param integer $ptype
     * @return Papers
     */
    public function setPtype($ptype)
    {
        $this->ptype = $ptype;
    
        return $this;
    }

    /**
     * Get ptype
     *
     * @return integer 
     */
    public function getPtype()
    {
        return $this->ptype;
    }

    /**
     * Set misc
     *
     * @param string $misc
     * @return Papers
     */
    public function setMisc($misc)
    {
        $this->misc = $misc;
    
        return $this;
    }

    /**
     * Get misc
     *
     * @return string 
     */
    public function getMisc()
    {
        return $this->misc;
    }

    /**
     * Set changed
     *
     * @param \DateTime $changed
     * @return Papers
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;
    
        return $this;
    }

    /**
     * Get changed
     *
     * @return \DateTime 
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Set sameAs
     *
     * @param string $sameAs
     * @return Papers
     */
    public function setSameAs($sameAs)
    {
        $this->sameAs = $sameAs;
    
        return $this;
    }

    /**
     * Get sameAs
     *
     * @return string 
     */
    public function getSameAs()
    {
        return $this->sameAs;
    }

    /**
     * Set pagePrefix
     *
     * @param string $pagePrefix
     * @return Papers
     */
    public function setPagePrefix($pagePrefix)
    {
        $this->pagePrefix = $pagePrefix;
    
        return $this;
    }

    /**
     * Get pagePrefix
     *
     * @return string 
     */
    public function getPagePrefix()
    {
        return $this->pagePrefix;
    }

    /**
     * Set miscPreamble
     *
     * @param string $miscPreamble
     * @return Papers
     */
    public function setMiscPreamble($miscPreamble)
    {
        $this->miscPreamble = $miscPreamble;
    
        return $this;
    }

    /**
     * Get miscPreamble
     *
     * @return string 
     */
    public function getMiscPreamble()
    {
        return $this->miscPreamble;
    }

    /**
     * Set miscPostamble
     *
     * @param string $miscPostamble
     * @return Papers
     */
    public function setMiscPostamble($miscPostamble)
    {
        $this->miscPostamble = $miscPostamble;
    
        return $this;
    }

    /**
     * Get miscPostamble
     *
     * @return string 
     */
    public function getMiscPostamble()
    {
        return $this->miscPostamble;
    }

    /**
     * Set online
     *
     * @param \DateTime $online
     * @return Papers
     */
    public function setOnline($online)
    {
        $this->online = $online;
    
        return $this;
    }

    /**
     * Get online
     *
     * @return \DateTime 
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set virtualTheme
     *
     * @param integer $virtualTheme
     * @return Papers
     */
    public function setVirtualTheme($virtualTheme)
    {
        $this->virtualTheme = $virtualTheme;
    
        return $this;
    }

    /**
     * Get virtualTheme
     *
     * @return integer 
     */
    public function getVirtualTheme()
    {
        return $this->virtualTheme;
    }

    /**
     * Set talkId
     *
     * @param string $talkId
     * @return Papers
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

    /**
     * Set tlkStartp
     *
     * @param integer $tlkStartp
     * @return Papers
     */
    public function setTlkStartp($tlkStartp)
    {
        $this->tlkStartp = $tlkStartp;
    
        return $this;
    }

    /**
     * Get tlkStartp
     *
     * @return integer 
     */
    public function getTlkStartp()
    {
        return $this->tlkStartp;
    }

    /**
     * Set tlkEndpg
     *
     * @param integer $tlkEndpg
     * @return Papers
     */
    public function setTlkEndpg($tlkEndpg)
    {
        $this->tlkEndpg = $tlkEndpg;
    
        return $this;
    }

    /**
     * Get tlkEndpg
     *
     * @return integer 
     */
    public function getTlkEndpg()
    {
        return $this->tlkEndpg;
    }

    /**
     * Set virtualIssueOrder
     *
     * @param integer $virtualIssueOrder
     * @return Papers
     */
    public function setVirtualIssueOrder($virtualIssueOrder)
    {
        $this->virtualIssueOrder = $virtualIssueOrder;
    
        return $this;
    }

    /**
     * Get virtualIssueOrder
     *
     * @return integer 
     */
    public function getVirtualIssueOrder()
    {
        return $this->virtualIssueOrder;
    }

    /**
     * Set virtualOnly
     *
     * @param boolean $virtualOnly
     * @return Papers
     */
    public function setVirtualOnly($virtualOnly)
    {
        $this->virtualOnly = $virtualOnly;
    
        return $this;
    }

    /**
     * Get virtualOnly
     *
     * @return boolean 
     */
    public function getVirtualOnly()
    {
        return $this->virtualOnly;
    }

    /**
     * Set paperchain
     *
     * @param string $paperchain
     * @return Papers
     */
    public function setPaperchain($paperchain)
    {
        $this->paperchain = $paperchain;
    
        return $this;
    }

    /**
     * Get paperchain
     *
     * @return string 
     */
    public function getPaperchain()
    {
        return $this->paperchain;
    }

    /**
     * Set paperchainId
     *
     * @param string $paperchainId
     * @return Papers
     */
    public function setPaperchainId($paperchainId)
    {
        $this->paperchainId = $paperchainId;
    
        return $this;
    }

    /**
     * Get paperchainId
     *
     * @return string 
     */
    public function getPaperchainId()
    {
        return $this->paperchainId;
    }

    /**
     * Set openAccess
     *
     * @param boolean $openAccess
     * @return Papers
     */
    public function setOpenAccess($openAccess)
    {
        $this->openAccess = $openAccess;
    
        return $this;
    }

    /**
     * Get openAccess
     *
     * @return boolean 
     */
    public function getOpenAccess()
    {
        return $this->openAccess;
    }

    /**
     * Set internalOnly
     *
     * @param boolean $internalOnly
     * @return Papers
     */
    public function setInternalOnly($internalOnly)
    {
        $this->internalOnly = $internalOnly;
    
        return $this;
    }

    /**
     * Get internalOnly
     *
     * @return boolean 
     */
    public function getInternalOnly()
    {
        return $this->internalOnly;
    }
}
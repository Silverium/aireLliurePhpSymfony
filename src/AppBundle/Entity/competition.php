<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * competition
 */
class competition
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $title;

    /**
     * @var boolean
     */
    private $inscriptable;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var string
     */
    private $imgLink;

    /**
     * @var string
     */
    private $organizer;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var string
     */
    private $prize;

    /**
     * @var string
     */
    private $inscrLink;


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
     * Set place
     *
     * @param string $place
     * @return competition
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return competition
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
     * Set inscriptable
     *
     * @param boolean $inscriptable
     * @return competition
     */
    public function setInscriptable($inscriptable)
    {
        $this->inscriptable = $inscriptable;

        return $this;
    }

    /**
     * Get inscriptable
     *
     * @return boolean 
     */
    public function getInscriptable()
    {
        return $this->inscriptable;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return competition
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
     * Set time
     *
     * @param \DateTime $time
     * @return competition
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set imgLink
     *
     * @param string $imgLink
     * @return competition
     */
    public function setImgLink($imgLink)
    {
        $this->imgLink = $imgLink;

        return $this;
    }

    /**
     * Get imgLink
     *
     * @return string 
     */
    public function getImgLink()
    {
        return $this->imgLink;
    }

    /**
     * Set organizer
     *
     * @param string $organizer
     * @return competition
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * Get organizer
     *
     * @return string 
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * Set cost
     *
     * @param float $cost
     * @return competition
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set prize
     *
     * @param string $prize
     * @return competition
     */
    public function setPrize($prize)
    {
        $this->prize = $prize;

        return $this;
    }

    /**
     * Get prize
     *
     * @return string 
     */
    public function getPrize()
    {
        return $this->prize;
    }

    /**
     * Set inscrLink
     *
     * @param string $inscrLink
     * @return competition
     */
    public function setInscrLink($inscrLink)
    {
        $this->inscrLink = $inscrLink;

        return $this;
    }

    /**
     * Get inscrLink
     *
     * @return string 
     */
    public function getInscrLink()
    {
        return $this->inscrLink;
    }
}

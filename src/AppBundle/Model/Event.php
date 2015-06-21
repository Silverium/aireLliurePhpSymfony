<?php
/**
 * Created by PhpStorm.
 * User: soldeplata
 * Date: 21/06/15
 * Time: 16:14
 */
namespace AppBundle\Model;

class Event {
    private $id;
    private $title;
    private $day;
    private $place;
    private $link;
    private $imgAlt;
    private $imgSrc;
    private $organizer;
    private $state;

    function __construct($id, $title, $day, $place, $link, $imgAlt, $imgSrc, $organizer, $state)
    {
        $this->id = $id;
        $this->title = $title;
        $this->day = $day;
        $this->place = $place;
        $this->link = $link;
        $this->imgAlt = $imgAlt;
        $this->imgSrc = $imgSrc;
        $this->organizer = $organizer;
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getImgAlt()
    {
        return $this->imgAlt;
    }

    /**
     * @param mixed $imgAlt
     */
    public function setImgAlt($imgAlt)
    {
        $this->imgAlt = $imgAlt;
    }

    /**
     * @return mixed
     */
    public function getImgSrc()
    {
        return $this->imgSrc;
    }

    /**
     * @param mixed $imgSrc
     */
    public function setImgSrc($imgSrc)
    {
        $this->imgSrc = $imgSrc;
    }

    /**
     * @return mixed
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param mixed $organizer
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

}
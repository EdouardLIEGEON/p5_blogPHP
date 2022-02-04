<?php
namespace App\Models;

class PostsModel extends Model
{
    protected $id;
    protected $title;
    protected $content;
    protected $header;
    protected $mockup;
    protected $subTitle;
    protected $technology1;
    protected $technology2;
    protected $technology3;
    protected $technology4;
    protected $date;
    protected $id_comments;
    
    public function __construct()
    {
        $this->table = 'posts';
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getHeader()
    {
        return $this->header;
    }
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    public function getMockup()
    {
        return $this->mockup;
    }
    public function setMockup($mockup)
    {
        $this->mockup = $mockup;
        return $this;
    }

    public function getSubTitle()
    {
        return $this->subTitle;
    }
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }

    public function getTechnology1()
    {
        return $this->technology1;
    }
    public function setTechnology1($technology1)
    {
        $this->technology1 = $technology1;
        return $this;
    }

    public function getTechnology2()
    {
        return $this->technology2;
    }
    public function setTechnology2($technology2)
    {
        $this->technology2 = $technology2;
        return $this;
    }

    public function getTechnology3()
    {
        return $this->technology3;
    }
    public function setTechnology3($technology3)
    {
        $this->technology3 = $technology3;
        return $this;
    }

    public function getTechnology4()
    {
        return $this->technology4;
    }
    public function setTechnology4($technology4)
    {
        $this->technology4 = $technology4;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function getId_comments()
    {
        return $this->id_comments;
    }
    public function setId_comments($id_comments)
    {
        $this->id_comments = $id_comments;
        return $this;
    }
}
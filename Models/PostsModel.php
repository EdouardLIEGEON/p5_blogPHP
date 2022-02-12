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
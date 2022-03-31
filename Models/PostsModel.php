<?php
namespace App\Models;

class PostsModel extends Model
{
    protected $id;
    protected $title;
    protected $content;
    protected $subTitle;
    protected $date;
    protected $author;
    
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


    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }
}
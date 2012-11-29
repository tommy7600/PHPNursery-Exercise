<?php

class Article
{

    private $_id;
    private $_title;
    private $_author;
    private $_addDate;
    private $_visibility;
    private $_content;

    public function setAddDate()
    {
        $this->_addDate = date("Y-m-d H:i:s");
        return $this;
    }

    public function getAddDate()
    {
        return $this->_addDate;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
        return $this;
    }

    public function getAuthor()
    {
        return $this->_author;
    }

    public function setContent($content)
    {
        $this->_content = $content;
        return $this;
    }

    public function getContent()
    {
        return $this->_content;
    }

    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setVisibility($visibility)
    {
        $this->_visibility = $visibility;
        return $this;
    }

    public function getVisibility()
    {
        return $this->_visibility;
    }

}

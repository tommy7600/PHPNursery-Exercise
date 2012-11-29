<?php

class Article
{
    private $_id;
    private $_title;
    private $_content;
    private $_author;
    private $_date;
    private $_visibility;

    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }
    
    public function setTitle($title)
    {
        $this->_title = $title;
        return $this;
    }
    
    public function setContent($content)
    {
        $this->_content = $content;
        return $this;
    }
    
    public function setAuthor($author)
    {
        $this->_author = $author;
        return $this;
    }
    
    public function setDate()
    {
        $this->_date = date('l jS \of F Y h:i:s A');
        return $this;
    }
    
    public function setVisibility($visibility)
    {
        $this->_visibility = $visibility;
        return $this;
    }
    
    public function getId()
    {
        return $this->_id;
    }
    
    public function getTitle()
    {
        return $this->_title;
    }
    
    public function getContent()
    {
        return $this->_content;
    }
    
    public function getAuthor()
    {
        return $this->_author;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function getVisibility()
    {
        return $this->_visibility;
    }

} 

?>
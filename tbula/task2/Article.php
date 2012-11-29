<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author tbula
 */
class Article 
{
   private $id;
   private $title;
   private $content;
   private $author;
   private $addDate;
   private $visible;
   
   public function __toString() 
   {
       return 'Id: '.$this->id.' Title: '.$this->title.' Content: '.$this->content.' Author: '. $this->author.' AddDate: '.$this->addDate.' Visible: '. $this->visible;
   }
   
   // <editor-fold desc="Properties">

   public function setId($id)
   {
       $this->id = $id;
       return $this;
   }
   
   public function getId()
   {
       return $this->id;
   }
   
   public function setTitle($title)
   {
       $this->title = $title;
       return $this;
   }
   
   public function getTitle()
   {
       return $this->title;
   }
   
   public function setContent($content)
   {
       $this->content = $content;
       return $this;
   }
   
   public function getContent()
   {
       return $this->content;
   }
   
   public function setAuthor($author)
   {
       $this->author = $author;
       return $this;
   }
   
   public function getAuthor()
   {
       return $this->author;
   }
   
   public function setAddDate($addDate)
   {
       $this->addDate = $addDate;
       return $this;
   }
   
   public function getAddDate()
   {
       return $this->addDate;
   }
   
   public function setVisible($visible)
   {
       $this->visible = $visible;
       return $this;
   }
   
   public function getVisible()
   {
       return $this->visible;
   }
   
    // </editor-fold>
}

?>

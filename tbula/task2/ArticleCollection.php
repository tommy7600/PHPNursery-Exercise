<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleCollection
 *
 * @author tbula
 */
class ArticleCollection 
{
    private $articles;
 
    public function __construct() 
    {
        $this->articles = array();
    }
    
    public function AddArticle(Article $article)
    {
        array_push($this->articles, $article);
    }
    
   public function getArticles()
   {
       return $this->articles;
   }
   
   public function RemoveArticle($id)
   {
       for($i = count($this->articles)-1; $i>=0; $i--)
       {
           $article = $this->articles[$i];
           if($article->getId() == $id)
           {
               unset($this->articles[$i]);
               break;
           }
       }
   }
   
}

?>

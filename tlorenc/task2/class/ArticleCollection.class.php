<?php
include_once("Article.class.php");
class ArticleCollection
{
    private $_collection;

    public function  addArticle(Article $article)
    {
        $this->_collection[$article->getId()] = $article;
    }

    public function showAllArticles()
    {
        echo "List of artices:<br>";
        foreach ($this->_collection As $key => $article) {
            if ($article->getVisibility()) { // If article is visible
                echo "Subject: " . $article->getTitle() . "<br>Content: " . $article->getContent() . "<br>Author: " . $article->getAuthor() . "<br>Publish date: " . $article->getAddDate() . "<br><br>";
            }
        }
    }

    public function deleteArticleFromCollection($articleID)
    {
        unset($this->_collection[$articleID]);
    }

}

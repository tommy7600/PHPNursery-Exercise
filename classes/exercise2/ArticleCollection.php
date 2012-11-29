<?php

include_once("Article.php");

class ArticleCollection
{
    private $_collection;
    
    public function __construct()
    {
        $this->_collection = array();
    }

    public function  addArticle(Article $article)
    {
        $article->setDate();
        $this->_collection[$article->getId()] = $article;
    }

    public function printArticlesSummary()
    {
        echo '<table class="table table-striped"><tr><th>ID</th><th>Title</th><th>Content</th><th>Author</th><th>Date</th></tr>';
        foreach ($this->_collection As $id => $article) {
            if ($article->getVisibility()) {
                echo "<tr>
                    <td>" . $id . "</td>
                    <td>" . $article->getTitle() . "</td>
                    <td>" . $article->getContent() . "</td>
                    <td>" . $article->getAuthor() . "</td>
                    <td>" . $article->getDate() . "</td>
                    </tr>";
            }
        }
        echo "</table>";
    }

    public function deleteArticle($id)
    {
        unset($this->_collection[$id]);
    }

} 

?>
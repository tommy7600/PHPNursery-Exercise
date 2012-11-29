<h3>Exercise 2</h3>

<div class="bs-docs-example">

    <?php

    include_once("classes/exercise2/ArticleCollection.php");

    $articleCollection = new ArticleCollection();

    $articleCollection->addArticle((new Article())->setId(3)->setTitle('Article 3')->setContent('Good article.')->setAuthor('John Doe')->setVisibility(1));
    $articleCollection->addArticle((new Article())->setId(5)->setTitle('Article 5')->setContent('Also good article.')->setAuthor('Jane Doe')->setVisibility(1));
    $articleCollection->addArticle((new Article())->setId(18)->setTitle('Article 18')->setContent('Nice article.')->setAuthor('Phil Collins')->setVisibility(1));
    $articleCollection->addArticle((new Article())->setId(7)->setTitle('Article 7')->setContent('Bad article.')->setAuthor('Eric Clapton')->setVisibility(1));
    
    $articleCollection->deleteArticle(7);

    $articleCollection->printArticlesSummary();

    ?>

</div>

<pre class="prettyprint">
    $articleCollection = new ArticleCollection();

    $articleCollection->addArticle((new Article())->setId(3)->setTitle('Article 3')->setContent('Good article.')->setAuthor('John Doe')->setVisibility(1));
    $articleCollection->addArticle((new Article())->setId(5)->setTitle('Article 5')->setContent('Also good article.')->setAuthor('Jane Doe')->setVisibility(1));
    $articleCollection->addArticle((new Article())->setId(18)->setTitle('Article 18')->setContent('Nice article.')->setAuthor('Phil Collins')->setVisibility(1));
    $articleCollection->addArticle((new Article())->setId(7)->setTitle('Article 7')->setContent('Bad article.')->setAuthor('Eric Clapton')->setVisibility(1));
    
    $articleCollection->deleteArticle(7);

    $articleCollection->printArticlesSummary();
</pre>

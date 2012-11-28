<?php
include_once("class/ArticleCollection.class.php");

// Create bunch of articles
$article_1 = new Article();
$article_2 = new Article();
$article_3 = new Article();

// Create new collection of articles
$newsCollection = new ArticleCollection();

$article_1->setId(1)->setAddDate()->setAuthor("Tomek")->setContent("Nothing new")->setTitle("News 1")->setVisibility(true);
$article_2->setId(2)->setAddDate()->setAuthor("Maja")->setContent("Joe won the first prize")->setTitle("News 2")->setVisibility(true);
$article_3->setId(3)->setAddDate()->setAuthor("Wojtek")->setContent("Kubica had an accident")->setTitle("News 3")->setVisibility(true);

//Add some news to collection
$newsCollection->addArticle($article_1);
$newsCollection->addArticle($article_2);
$newsCollection->addArticle($article_3);

//Show all articles
$newsCollection->showAllArticles();

echo "After delete article form collection<br>------<br>";

// Remove one article and then show the difference
$newsCollection->deleteArticleFromCollection(1);
$newsCollection->showAllArticles();


unset($newsCollection);


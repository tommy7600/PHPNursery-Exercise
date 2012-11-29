<?php

function __autoload($class_name) {
    include 'classes/'. $class_name . '.php';
}

$article = new Article();
$article->id = 1;
$article->title = 'Some title one';
$article->body = 'Amazing world, isnt it?';
$article->author = 'Crazy author';
$article->add_date = time();

$article2 = new Article();
$article2->id = 2;
$article2->title = 'Second part of amazing world';
$article2->body = 'True';
$article2->author = 'Crazy author';
$article2->add_date = time();


$collection = new ArticleCollection();
$collection->add($article);
$collection->add($article2);


echo 'Before:<br><br>';

foreach ( $collection->showAll() as $key => $value )
{
	echo 'Title: '.$value->title.'<br>';
	echo 'Body: '.$value->body.'<br>';
	echo 'Author: '.$value->author.'<br>';
	echo 'Add date: '.date("Y-m-d H:i:s", $value->add_date).'<br><br>';
}

try {
	$collection->removeCollection(1);
	echo '<br>';
	echo 'After:<br><br>';
	foreach ( $collection->showAll() as $key => $value )
	{
		echo 'Title: '.$value->title.'<br>';
		echo 'Body: '.$value->body.'<br>';
		echo 'Author: '.$value->author.'<br>';
		echo 'Add date: '.date("Y-m-d H:i:s", $value->add_date).'<br><br>';
	}
}
catch (Exception $e) {
	echo $e->getMessage();
}
<?php
    include 'loader.php';
    
    $collection = new ArticleCollection;
    $article1 = new Article;
    $article2 = new Article;
    $article3 = new Article;
    $article4 = new Article;
    $article5 = new Article;
    
    $article1->SetId(1)->SetTitle('Title1')->SetContent('Content1')
            ->SetAuthor('Author1')->SetCreatedDate('createdDate1')->SetVisibility('visibility1');
    $article2->SetId(2)->SetTitle('Title2')->SetContent('Content2')
            ->SetAuthor('Author2')->SetCreatedDate('createdDate2')->SetVisibility('visibility2');
    $article3->SetId(3)->SetTitle('Title3')->SetContent('Content3')
            ->SetAuthor('Author3')->SetCreatedDate('createdDate3')->SetVisibility('visibility3');
    $article4->SetId(4)->SetTitle('Title4')->SetContent('Content4')
            ->SetAuthor('Author4')->SetCreatedDate('createdDate4')->SetVisibility('visibility4');
    $article5->SetId(5)->SetTitle('Title5')->SetContent('Content5')
            ->SetAuthor('Author5')->SetCreatedDate('createdDate5')->SetVisibility('visibility5');
    
    $collection->AddArticle($article1);
    $collection->AddArticle($article2);
    $collection->AddArticle($article3);
    $collection->AddArticle($article4);
    $collection->AddArticle($article5);

    $collection->ShowAll();
    $collection->RemoveArticleById(3);
    echo '<br><br><br>AFTER REMOVED<br><br><br>';
    $collection->ShowAll();
    
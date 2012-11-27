<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
            include_once 'Article.php';
            include_once 'ArticleCollection.php';
            
           $a1 = (new Article())->
            setId(1)->
            setTitle('scprrr')->
            setAuthor('Forfit')->
            setContent('pacz jaki kurwa szwagier')->
            setAddDate('2012-11-26')->
            setVisible(true);
                   
           $a2 = (new Article())->
            setId(2)->
            setTitle('qwe')->
            setAuthor('qwe')->
            setContent('qwe')->
            setAddDate('2012-11-26')->
            setVisible(true);
           
           $a3 = (new Article())->
            setId(3)->
            setTitle('asd')->
            setAuthor('asd')->
            setContent('asd')->
            setAddDate('2012-11-26')->
            setVisible(true);
           
           $ac = new ArticleCollection;
           $ac->AddArticle($a1);
           $ac->AddArticle($a2);
           $ac->AddArticle($a3);
           
           foreach ($ac->getArticles() as $article) {
               echo $article;
               echo '<br>';
           }
           
           $ac->RemoveArticle(2);
           foreach ($ac->getArticles() as $article) {
               echo $article;
               echo '<br>';
           }
           
        ?>
    </body>
</html>

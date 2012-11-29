<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "ArtykulKolekcja.php";
            $artykul1 = new Artykul();
            $artykul2 = new Artykul();
            $artykul3 = new Artykul();
            
            $artykul1->SetId(1)
                    ->SetTytul("Katastrofa kolejowa")
                    ->SetTresc("Pociagi sie zderzyly, na miejscu jest nasz reporter.")
                    ->SetAutor("Piotr Bartela")
                    ->SetData(date("Y-m-d H:i:s"))
                    ->SetWidocznosc("publiczny");
            
            $artykul2->SetId(2)
                    ->SetTytul("Katastrofa lotnicza")
                    ->SetTresc("Samoloty sie zderzyly, na miejscu jest nasz reporter.")
                    ->SetAutor("Piotr Bartela")
                    ->SetData(date("Y-m-d H:i:s"))
                    ->SetWidocznosc("publiczny");
                        
             $artykul3->SetId(3)
                    ->SetTytul("Katastrofa Morska")
                    ->SetTresc("Okręty sie zderzyly, na miejscu jest nasz reporter.")
                    ->SetAutor("Piotr Bartela")
                    ->SetData(date("Y-m-d H:i:s"))
                    ->SetWidocznosc("publiczny");
            
            $kolekcjaArtow = new ArtykulKolekcja();
            
            $kolekcjaArtow->DodajArtykul($artykul1);
            $kolekcjaArtow->DodajArtykul($artykul2);
            $kolekcjaArtow->DodajArtykul($artykul3);
            
            foreach($kolekcjaArtow->Pobierz_Wszystko() as $art)
            {
                $art->ShowWholeArticle();
                echo '<br>';
            }
            echo '<hr>';
            
            $kolekcjaArtow->UsunArtykulPoId(2);
            
            foreach($kolekcjaArtow->Pobierz_Wszystko() as $art)
            {
                $art->ShowWholeArticle();
                echo '<br>';
            }
        ?>
    </body>
</html>

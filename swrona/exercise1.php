<h3>Exercise 1</h3>

<div class="bs-docs-example">

    <?php

    include_once("classes/exercise1/Gamer.php");

    $gamer1 = new Gamer('Stanislaw', 'Wrona');

    $gamer1->setScore(15);
    $gamer1->addToScore(-4);

    unset($gamer1);

    ?>

</div>

<pre class="prettyprint">
    $gamer1 = new Gamer('Stanislaw', 'Wrona');

    $gamer1->setScore(15);
    $gamer1->addToScore(-4);

    unset($gamer1);
</pre>

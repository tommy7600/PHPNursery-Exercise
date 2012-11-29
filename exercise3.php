<h3>Exercise 3</h3>

<div class="bs-docs-example">

    <?php

    include_once("classes/exercise3/Cart.php");
    include_once("classes/exercise3/Board.php");
    include_once("classes/exercise3/Boots.php");
    include_once("classes/exercise3/Gloves.php");
    include_once("classes/exercise3/Knife.php");
    include_once("classes/exercise3/Pipe.php");

    $cart = new Cart();

    $cart->addProduct(new Boots('Sandals', 'Badura', 199, 23, 1, 45));
    $cart->addProduct(new Pipe('PCV pipe', 'Pipex', 34, 23, 1, 100, 5));
    $cart->addProduct(new Board('Wooden board', 'Castorama', 12, 23, 1, 50, 100));
    $cart->addProduct(new Gloves('Work gloves', 'Stahlson', 19, 23, 1, 8));

    $cart->removeProduct('Wooden board');

    $cart->printCartSummary();

    ?>

</div>

<pre class="prettyprint">
    $cart = new Cart();

    $cart->addProduct(new Boots('Sandals', 'Badura', 199, 23, 1, 45));
    $cart->addProduct(new Pipe('PCV pipe', 'Pipex', 34, 23, 1, 100, 5));
    $cart->addProduct(new Board('Wooden board', 'Castorama', 12, 23, 1, 50, 100));
    $cart->addProduct(new Gloves('Work gloves', 'Stahlson', 19, 23, 1, 8));

    $cart->removeProduct('Wooden board');

    $cart->printCartSummary();
</pre>

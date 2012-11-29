<h3>Exercise 4</h3>

<div class="bs-docs-example">

    <?php

    include_once("classes/exercise4/Math.php");

    $solution = Math::quadraticFunction(1, 2, -8, 3);
    if (is_array($solution))
        echo "x1 = " . $solution[0] . ", x2 = " . $solution[1] . ";";
    elseif (is_real($solution))
        echo "x0 = " . $solution . ";";
    else
        echo $solution;
    echo "<br>";
        
    $solution = Math::linearFunction(1, 2, 3);
    if (is_real($solution))
        echo "x0 = " . $solution . ";";
    else
        echo $solution;
    echo "<br>";
    
    echo Math::factorial(14) . "<br>";
    
    echo Math::circleArea(4, 3) . "<br>";
    
    echo Math::circleCircumference(5, 3) . "<br>";

    ?>

</div>

<pre class="prettyprint">
    $solution = Math::quadraticFunction(1, 2, -8, 3);
    if (is_array($solution))
        echo "x1 = " . $solution[0] . ", x2 = " . $solution[1] . ";";
    elseif (is_real($solution))
        echo "x0 = " . $solution . ";";
    else
        echo $solution;
    echo "&lt;br&gt;";
        
    $solution = Math::linearFunction(1, 2, 3);
    if (is_real($solution))
        echo "x0 = " . $solution . ";";
    else
        echo $solution;
    echo "&lt;br&gt;";
    
    echo Math::factorial(14) . "&lt;br&gt;";
    
    echo Math::circleArea(4, 3) . "&lt;br&gt;";
    
    echo Math::circleCircumference(5, 3) . "&lt;br&gt;";
</pre>

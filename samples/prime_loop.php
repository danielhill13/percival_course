<h1>Interaction</h1>


<form action="">
    <input type="number" name="number" placeholder="number">
    <input type="submit" value="go">
</form>



<?php

$isPrime = true;
$i = 2;
while ($i < $_GET['number']){
    if($_GET['number'] % $i == 0){
        $isPrime = false;
    }
    $i++;
}
        if ($isPrime){
            echo ($_GET['number']." is prime");
        } else {
            echo ($_GET['number']." is not prime");
        }

    ?>


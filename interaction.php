<h1>Interaction</h1>


<form action="">
    <input type="number" name="number" placeholder="number">
    <input type="submit" value="go">
</form>



<?php
$num = $_GET['number'];
for ($i = 2; $i < $num; $i++){
    if ($num % $i == 0){
        echo ($num." is not prime");
        $i = $num;
    }
}
echo ($num." is prime");

// Input number
// Check if prime
// Respond with prime or no
?>


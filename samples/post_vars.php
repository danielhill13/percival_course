<h1>POST</h1>
<?php
print_r($_POST);
$names = array("Paula", "Daniela", "Daniel");
print_r($names);
?>
<p>Please enter your name</p>
<form method="POST">
    <input type="text" name="name" placeholder="your name">
    <br>
    <input type="submit">
</form>


<?php
if($_POST){
    $myName = $_POST['name'];
    if (in_array($myName, $names)){
        echo("<p>Hey there ".$myName."!</p>");
    } else {
        echo("<p>We don't know you, ".$myName.".</p>");
    }
}

?>

<?php

$link = mysqli_connect("localhost", "percivaldb1", "percivaldb1", "percivaldb1");

if (mysqli_connect_error()) {
 die("Error connecting to database");
}


?>


<form method="POST">
<label for="email">Email</label><br>
<input type="email" name="email"><br>
<label for="password">Password</label><br>
<input type="password" name="password"><br>
<input type="submit">
</form>

<!-- <p>Ask for email and password</p> -->
<!-- <p>Check email and password are entered</p> -->
<p>Check email address is not registered</p>
<p>Sign user up </p>


<?php
$errors = 0;
$error = "";
if($_POST){
    $error = "";
    if(!$_POST['email']){
        $error .= "An email address is required.<br>";
        $errors = 1;
    }
    if(!$_POST['password']){
        $error .= "A password is required.<br>";
        $errors = 1;
    }
    if($_POST['email'] && $_POST['password']){
        $errors = 0;
    }
}

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];

if ($errors == 0){
    $newUser = "INSERT INTO users (email, password) VALUES('$userEmail', '$userPassword')";
    mysqli_query($link, $newUser);
} elseif ($errors == 1){
    echo($error);
}

?>

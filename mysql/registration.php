
<form method="POST">
<label for="email">Email</label><br>
<input type="email" name="email"><br>
<label for="password">Password</label><br>
<input type="password" name="password"><br>
<input type="submit">
</form>

<?php

$link = mysqli_connect("localhost", "percivaldb1", "percivaldb1", "percivaldb1");

if (mysqli_connect_error()) {
 die("Error connecting to database");
}
    $error = "";
if(!$_POST['email']){
    $error = "An email address is required.<br>";
    echo($error);
    } else if(!$_POST['password']){
        $error = "A password is required.<br>";
        echo($error);
    } else {
    $userEmail = mysqli_real_escape_string($link, $_POST['email']);
    $userPassword = $_POST['password'];
    $checkUnique = "SELECT * FROM users where email = '".$userEmail."'";
    $result = mysqli_query($link, $checkUnique);
    if(mysqli_num_rows($result) > 0) {
        echo ("That email already has an account");
    } else {
        $newUser = "INSERT INTO users (email, password) VALUES('$userEmail', '$userPassword')";
        mysqli_query($link, $newUser);
        echo("Welcome, ".$userEmail.", your account has been created!");
    }
}
?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<h1>Get in Touch!</h1>

<?php
if ($_POST) {
    $error = "";
    if (!$_POST['email']) {
        $error .= "An email address is required.<br>";
    }
    if (!$_POST['body']) {
        $error .= "A body is required.<br>";
    }
    if (!$_POST['subject']) {
        $error .= "A subject is required.<br>";
    }


}
if(!mail($emailTo, $subject, $body, $headers)){
    echo("<div class='alert alert-success'>Your message was sent, we'll get back to you ASAP!</div>");
}
 $emailTo = "daniel.hill13@gmail.com";
 $subject = $_POST['subject'];
 $body = $_POST['body'];
 $userEmail = $_POST['userEmail'];
 $headers = "From: daniel.hill13@gmail.com";
?>

<form method="POST" class="navbar-form">
<div class="form-group">
    <label for="userEmail">Your Email</label>
    <input type="email" class="form-control" name="userEmail" placeholder="your email address">
    <label for="subject">Subject</label>
    <input type="text" id="subject"class="form-control" name="subject" placeholder="subject">
    <label for="body">Body</label>
    <input type="text" class="form-control"name="body" placeholder="What would you like to ask us?">
    <input type="submit" id="submit" class="btn btn-default">
</div>
</form>
<br>

<?php
print_r($_POST);
print_r($error);
?>

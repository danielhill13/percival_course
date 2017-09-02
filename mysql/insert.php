<head>
</head>
<body>
    <h1>mySQL Insert</h1>
</body>

<?php

$link = mysqli_connect("localhost", "percivaldb1", "percivaldb1", "percivaldb1");

if (mysqli_connect_error()) {
 die("Error connecting to database");
}
//here's the insert stuff
$query = "INSERT INTO users (email, password) VALUES('bbowefwe@yahoo.com', 'oq3w085yhw4ho')";

mysqli_query($link, $query);

?>
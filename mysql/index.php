<head>
</head>
<body>
    <h1>mySQL Connectivity</h1>
</body>

<?php

$link = mysqli_connect("localhost", "percivaldb1", "percivaldb1", "percivaldb1");

if (mysqli_connect_error()) {
 die("Error connecting to database");
}
$query = "SELECT * FROM users";

if ($result = mysqli_query($link, $query)) {
    echo("<p>Query was successful</p>");
    $row = mysqli_fetch_array($result);
    print_r($row);
}

echo ("<p>Your email is ".$row['email']."</p>");
echo ("<p>Your password is ".$row['password']."</p>");
?>
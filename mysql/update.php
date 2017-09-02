<head>
</head>
<body>
    <h1>mySQL Update</h1>
</body>

<?php

$link = mysqli_connect("localhost", "percivaldb1", "percivaldb1", "percivaldb1");

if (mysqli_connect_error()) {
 die("Error connecting to database");
}
//Use WHERE and LIMIT to prevent overwriting your DB!!!!!!!!!!
$query = "UPDATE users SET password = 'oqurgq3-95tg035goqi35' WHERE email = 'daniel.hill13@gmail.com' LIMIT 1";

mysqli_query($link, $query);

?>
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
// $query = "SELECT * FROM users";
//LIKE in SQL searches for string after % or string between % and 
//% and returns anything with similar
// $query = "SELECT * FROM users WHERE email LIKE '%bb%'";

//Greater or less than
// $query = "SELECT * FROM users WHERE id >= 3";

//RETURN just that field
$query = "SELECT email FROM users";

if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_array($result)){
        print_r($row);
        echo("<br>");
    }
}

?>
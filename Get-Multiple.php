<?php

$say = "Hello " . $_GET['first_name']. " " . $_GET['Last_name'];
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1><?= $say ?></h1>
</body>
</html>
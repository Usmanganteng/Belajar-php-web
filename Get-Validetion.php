<?php
if (!isset($_GET['name']) || $_GET['name'] == "") {
    http_response_code(400);
    echo "name is required";
    exit();
}

$say = "Hello " . htmlspecialchars($_GET['name']);
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1><?= $say ?></h1>
</body>
</html>
<?php

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
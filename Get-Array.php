<?php
$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1><?= "Total = $total" ?></h1>
</body>
</html>
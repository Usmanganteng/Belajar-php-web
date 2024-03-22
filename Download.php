<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="Boneka..PNG"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/file/boneka.PNG');
    exit();
}else{
    echo "Invalid Key";
}

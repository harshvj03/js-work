<link rel="stylesheet" href="./style/login.css">

<?php

    $file = fopen("./productlist.txt",'r');
    $data = fread($file,filesize("./productlist.txt"));

    echo $data;
    fclose($file);

?>


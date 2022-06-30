<?php

$connect = new mysqli("localhost","root","","uas_flutter");

if($connect) {
    echo "connetion Success";
}else{
    echo "connection Failed";
    exit();
}
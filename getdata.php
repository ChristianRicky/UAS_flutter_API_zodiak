<?php
include 'conn.php';

$querryResult=$connect->query("SELECT * FROM tb_zodiak");

$result=array();

while ($fetchData=$querryResult->fetch_assoc()) {
    $result []=$fetchData;

}

echo json_encode($result);
?>
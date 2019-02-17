<?php

$con = mysqli_connect("localhost", "root", "12345678", "db_test");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = 'select * from tb_time where id=1';
$result = mysqli_query($con, $sql);
$record = mysqli_fetch_array($result);

$date1 = date('Y-m-d H:i', strtotime('+1 minutes', strtotime($record[time])));
$date2 = date('Y-m-d H:i:s');

echo $date1;
echo '<hr>';
echo $date2;
echo '<hr>';

if ($date1 < $date2) {
    $sql = 'delete from tb_time where id=1';
    $result = mysqli_query($con, $sql);

    echo 'del';
    unlink('./upload/test.txt');
} else {
    echo 'not';
}

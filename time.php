<?php
	$con = mysqli_connect("localhost","root","12345678","db_test");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$date = date('Y-m-d H:i:s');

	$sql = "insert into tb_time(file,time) values('test','$date')";

	$result = mysqli_query($con,$sql);

	if($result){
		echo 1;
		echo $date;
	} else {
		echo 0;
		echo $date;
	}

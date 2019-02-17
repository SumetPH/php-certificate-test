<?php
	include "connect.php";

	$sql = "SELECT * from tb_words where word like '%$_POST[text]%'";
	$result = mysqli_query($conn,$sql);
	$count = 1;
	print_r($result);
?>

<link rel="stylesheet" href="css/bootstrap.css">

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Index</th>
			<th>Word</th>
		</tr>
	</thead>
	<tbody>
		<?php while($row = mysqli_fetch_array($result)){ ?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row[word] ?></td>
			<?php $count++; ?>
		</tr>
		<?php } ?>
	</tbody>
</table>
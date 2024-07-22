<?php
include 'conn.php';
$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);
//var_dump($result);

$num_rows = mysqli_num_rows($result);

?>

<!DOCTYPE html>

<html>
<link href="https://fonts.googleapis.com/css? family=Open+Sans:300, 400, 700" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="style.css">


<h2>Created with ❤ by Saman Khan</h2>

<table class="container">
	<thead>
		<tr>
			<th>
				<h1>Name</h1>
			</th>
			<th>
				<h1>Email</h1>
			</th>
			<th>
				<h1>Age</h1>
			</th>
			<th>
				<h1>Phone</h1>
			</th>
		</tr>
	</thead>
	<tbody>

		<?php
		if ($num_rows > 0) {

			for ($i = 0; $i < $num_rows; $i++) {

				$row = mysqli_fetch_array($result);
		?>
				<tr>
					<td><?= $row['std_name'] ?></td>
					<td><?= $row[4] ?></td>
					<td><?= $row[2] ?></td>
					<td><?= $row[3] ?></td>
					<td><a href="delete.php?id=<?= $row[0] ?>">Delete</a></td>
				</tr>
		<?php
			}
		}
		else{
			echo "<td colspan=5>No Record Found</td>";
		}
		?>
	</tbody>
</table>

</tbody>

</html>
<?php

include("config1.php");
if(isset($_POST['input'])){
	
	$input = $_POST['input'];

	$query = "SELECT * FROM sports WHERE sports LIKE '{$input}%'  OR firstname LIKE '{$input}%' OR lastname LIKE '{$input}%' OR Gender LIKE '{$input}%' OR id LIKE '{$input}%' ";

	$result = mysqli_query($con,$query);

	if(mysqli_num_rows($result) > 0 ){?>

		<table class="table table-bordered table-striped mt-4">
			<thead>
				<tr>
  							<th>ID</th>
  							<th>SPORTS</th>
  							<th>FIRST NAME</th>
  							<th>LAST NAME</th>
  							<th>GENDER</th>
				</tr>
			</thead>

			<tbody>
				<?php 

				while ($row = mysqli_fetch_assoc($result)){

					$id = $row['id'];
					$sports = $row['sports'];
					$firstname = $row['firstname'];
					$lastname = $row['lastname'];
					$Gender = $row['Gender'];

					?>

					<tr>
						<td><?php echo $id;?> </td>
						<td><?php echo $sports;?> </td>
						<td><?php echo $firstname;?> </td>
						<td><?php echo $lastname;?> </td>
						<td><?php echo $Gender;?> </td>

					</tr>
					<?php
				}
			?>
			</tbody>
		</table>
<?php 
	} else{
		echo "<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
	}
}

?>
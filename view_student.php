<?php
require "student.php";
$obj_student= new Student();
 $query_result=$obj_student->select_all_student();


if(isset($_GET['delete'])){
$student_id = $_GET['delete'];

$message=$delete_result=$obj_student->delete_all_student($student_id);
}

?>
<html>

<head>
	<title>CRUD IN PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

	<div class="container">

		<table class="table table-bordered table-responsive">
			<h2><?php  if(isset($message)) echo $message; unset($message); ?></h2>
			<tr>
				<td width="200px" height="50px">LOGO</td>
				<td colspan="6"> Banner</td>
			</tr>
			<tr>
				<td height="60" colspan="7">
					<ul>
						<li><a href="index.php">Add student</a></li>
						<li><a href="view_student.php">View ALL</a></li>

					</ul>

				</td>

			</tr>
			<tr>
				<td height="500"></td>
				<td>
					<h2 style="margin-bottom: 50px" class="text-center">View All Student</h2>
					<table class="table-responsive table-bordered table">
						<thead>
							<th>Student Name</th>
							<th>Student Email</th>
							<th>Student Password</th>
							<th>Student Address</th>
							<th>Student Image</th>

						</thead>
						<tbody>
						<?php while($row=mysqli_fetch_assoc($query_result)){ ?>
							<tr>
								<td><?php echo $row['student_name'];  ?></td>
								<td><?php echo $row['student_email'];  ?></td>
								<td><?php echo $row['student_password'];  ?></td>
								<td><?php echo $row['student_address'];  ?></td>
				<td>
	<img src="images/<?php echo $row['image'];?>" width="150" height="150">


	 </td>
	 <td><a href="?delete=<?php echo $row['student_id'];?>">Delete</a></td>
	  <td><a href="edit_student.php?id=<?php echo $row['student_id'];?>">Update</a></td>

							</tr>
						<?php } ?>
						</tbody>
					</table>
					
					
				</td>
				

			</tr>

		</table>


	</div>
</body>

</html>


<?php 

require "student.php";

$st = new Student();

if(isset($_POST['btn'])){

	$message=$query_result=$st->save_student($_POST);

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
			<h3 class="text-center"><?php if(isset($message)) {echo $message; } ?></h3>
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

					<h2 style="margin-bottom: 50px" class="text-center">Add Student</h2>
					<div class="col-md-6 col-md-offset-2 col-sm-6" >
						<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input name="name" type="text" class="form-control" id="name" placeholder="name">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input name ="email" type="email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9">
									<input name ="password" type="password" class="form-control" id="password" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<label for="Address" class="col-sm-3 control-label">Address</label>
								<div class="col-sm-9">
									<input name="address" type="text" class="form-control" id="Address" placeholder="Address">
								</div>
							</div>
							<div class="form-group">
								<label for="image" class="col-sm-3 control-label">Image</label>
								<div class="col-sm-9">
									<input name="image" type="file" class="form-control" id="Image" placeholder="Image">
								</div>
							</div>
							<div class="col-md-offset-6">
								<input type="submit" name="btn" class="btn-lg btn-warning ">

							</div>
							
						</form>
					</div>
				</td>
				

			</tr>

		</table>


	</div>
</body>





</html>


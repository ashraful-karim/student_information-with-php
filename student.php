<?php 

/**
* 
*/
/**
* 
*/
class Student{
 
		private $connection ;
		public function __construct(){

			$host_name = 'localhost';
			$username = 'root';
			$password = '';
			$db_name = 'students';

			$this->connection = mysqli_connect($host_name,$username,$password, $db_name);

			if($this->connection){
				echo "database Is connected";
			}else{
				die('Database is not connected'.mysqli_error($this->connection));
			}
		}

	public function save_student($data){

		$post_image = $_FILES['image']['name'];
	$post_image_temp = $_FILES['image']['tmp_name'];
move_uploaded_file($post_image_temp, "images/$post_image");

		$query = "INSERT INTO tbl_student(student_name,student_email,student_password,student_address,image) VALUES('$data[name]','$data[email]','$data[password]','$data[address]','$post_image')";

		$query_result = mysqli_query($this->connection,$query);
		if($query_result){

			$message = "Student Info Is Inserted Successfully";
			return $message;
		}else{
			die("save query failed".mysqli_error($this->connection));
		}
	}


	public function select_all_student(){

		$query = "SELECT * FROM tbl_student";
		$query_result =mysqli_query($this->connection,$query);

		if($query_result){
			return $query_result;
		}else{
			die("Select query failed".mysqli_error($this->connection));
		}
	}

	public function delete_all_student($student_id){

		$query = "DELETE FROM tbl_student WHERE student_id ='$student_id'";
		$delete_result=mysqli_query($this->connection,$query);
			header('Location:view_student.php');
		if($delete_result){
			$message ="successfully Deleted";
			return $message;
			
		}else{
			die("delete query failed".mysqli_error($this->connection));
		}
	}

	public function select_all_student_by_id($student_id){
		$query = "SELECT * FROM tbl_student WHERE student_id='$student_id'";

		$query_result = mysqli_query($this->connection,$query);

		return $query_result;

	}

	public function update_student_by_id($data){

	$post_image = $_FILES['image']['name'];
	$post_image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($post_image_temp, "images/$post_image");

if(empty($post_image)){
		$query = "SELECT * FROM tbl_student WHERE student_id = '$data[student_id]' ";
		$select_image = mysqli_query($this->connection,$query);

		
	}

	$query = "UPDATE tbl_student SET student_name='$data[name]', ";
	$query .= "student_email='$data[email]', ";
	$query .= "student_password='$data[password]', ";
	$query .= "student_address='$data[address]', ";
	$query .= "image = '$post_image' ";
	$query .= "WHERE student_id = '$data[student_id]'";

	$update_result = mysqli_query($this->connection,$query);

	header("Location:view_student.php");

	}

}



 ?>
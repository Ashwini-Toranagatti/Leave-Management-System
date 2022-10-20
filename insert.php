
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$employeeid = $_POST['emp'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$dept =$_POST['department'];
$address = $_POST['address'];
//echo $firstname.$lastname.$Semester.$email.$phonenumber.$Course
$sql = "INSERT INTO employee_master(emp_id,name,design_id,email,contact,gender,address,dept_id,username,password)
VALUES ('$employeeid','$name','$designation','$email','$phone','$gender','$address','$dept','$username','$password')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
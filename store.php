 <?php

$servername="localhost:3306";
$username="hashtech_admin";
$password="Test@357357";
$dbname="hashtech_test";

//create Connection
$conn=new mysqli($servername,$username,$password,$dbname);

//Check Connection
if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];

$sql="insert into querys(name,email,subject,msg) values('$name','$email','$subject','$msg')";

if($conn->query($sql)==TRUE){
	echo "Message Submitted Successfully";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:index.html#contact");



?>
 

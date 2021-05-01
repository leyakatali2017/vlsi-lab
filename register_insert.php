<html>
<head><title> db demo</title>
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "root", "vlsi_labs");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

	$fname=$_POST["fname"];
	$mlname=$_POST["mlname"];
	$emailid=$_POST["emailid"];
	$contact=$_POST["contact"];
	$ad1=$_POST["ad1"];
	$ad2=$_POST["ad2"];
  $ad3=$_POST["ad3"];
  $ad4=$_POST["ad4"];

	$username=$_POST["username"];
	$password1=$_POST["password1"];
  $conpassword=$_POST["conpassword"];
  $agreement=$_POST["agreement"];
  //$formSubmit=$_POST["formSubmit"];
	// $query="INSERT INTO USER(FirstName,MiddleName,LastName,username,password,ContactNo,Email,GenderId,RoleId) values('$fname','$mname','$lname,'$uname,$pass,$cno,$email,$gender1,$role1)";
// 	echo $fname; $_POST["fname"],
// 	$mlname, $_POST["mlname"],
// 	$emailid, $_POST["emailid"],
// 	$contact, $_POST["contact"],
// 	$ad1, $_POST["ad1"],
// 	$ad2, $_POST["ad2"],
//   $ad3, $_POST["ad3"],
//   $ad4, $_POST["ad4"];

	$query="insert into customer(CustomerFirstName,CustomerLastName,ContactNo,AddressLine1,AddressLine2,District,PinCode,EmailID)
	values(\"".$fname."\",\"".$mlname."\",\"".$contact."\",\"".$ad1."\",\"".$ad2."\",\"".$ad3."\",\"".$ad4."\",\"".$emailid."\")";
	// echo $qvcx999]]]9]]]]+\uery;
    if(strcmp($password1,$conpassword)==0) {
      //echo "Mismatch: Check entered password and confirm password";


    $query2="insert into user(Username,Password)values(\"".$username."\",\"".$password1."\")";

		$query1="select * from user where Username='$username'";
		// echo $query1;




$result=mysqli_query($conn,$query1);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "Username already taken";
}

else
{
	$result1=mysqli_query($conn,$query2);
	$result2=mysqli_query($conn,$query);
	echo "<br> Successful insertion of record";

}

?>

</body>
</html>
<?php

if (isset($_POST['submit'])) {
	$mail =$_POST['email'];
	$password =$_POST['password'];
	$First =$_POST['firstname'];
	$Last =$_POST['lastname'];
	$Number =$_POST['number'];
	$City =$_POST['city'];
	$Industry =$_POST['industry'];
	$Company =$_POST['company'];
	$Educational =$_POST['educational'];
	$year =$_POST['year'];
	$month =$_POST['month'];
	$lakhs =$_POST['lakhs'];
	$thousands =$_POST['thousands'];
	$conn = mysqli_connect('localhost','root','','from1');

	
	$qry = "INSERT INTO `personal information`(`Email_id`, `Password`, `First_Name`, `Last_Name`, `Mobile_number`, `City`, `Industry`, `Function`, `Highest_eductional_qulification`, `Overall_experience_year`, `Overall_experience_month`, `Persent_ctc_lakhs`, `Persent_ctc_thousands`, `Cv`) VALUES(`$mail`,`$password `,
 `$First `, `$Last `, `$Number `, `$City `, `$Industry `, `$Company `, `$Educational `, `$year `, `$month `, `$lakhs `, `$thousands `)";
print_r($qry);die();

	$run = mysqli_query($conn,$qry);
	
	if ($run== TRUE) {
		echo "connection is ok ";
	}
	else
	{
		echo "ERROR";
	}
 
 } 


?>
<form action="verification.php" method="post" enctype="multipart/form-data"></form>
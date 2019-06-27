<?php
	$email = $_POST['email'];
	$name = $_POST['name'];
	$location = $_POST['location'];
	$apply = $_POST['apply'];
	$experience = $_POST['experience'];
	$company = $_POST['company'];
	$dob = $_POST['dob'];
	$mobile = $_POST['mobile'];
	$salary = $_POST['salary'];
	$file = $_POST['file'];

if (!empty($email) || !empty($name) || !empty($location) || !empty($apply) || !empty($experience) || !empty($company) || !empty($dob) || !empty($mobile) || !empty($salary)
     || !empty($file)){
   $host = "localhost";
    $dbUsername = "Jayant99";
    $dbPassword = "Jayant@99";
    $dbname = "RSubmit";
    $dbtable = "newuser1";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else{

        $SELECT = "SELECT email From newuser Where email = ? Limit 1";
     $INSERT = "INSERT Into newuser1 (email, name, location, apply, experience, company, dob, mobile, salary, file) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
          //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
        if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssssisis",$email, $name, $location, $apply, $experience, $company, $mobile, $salary);
      $stmt->execute();
       echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
header("refresh:2; url=bstform.html");
?>


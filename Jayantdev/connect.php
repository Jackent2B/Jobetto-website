<?php
	$email = $_POST["email"];
	$name = $_POST["name"];
	$location = $_POST["location"];
	$apply = $_POST["apply"];
	$experience = $_POST["experience"];
	$company = $_POST["company"];
	$dob = $_POST["dob"];
	$mobile = $_POST["mobile"];
	$salary = $_POST["salary"];
	$file = $_POST["file"];

// if (!empty($email) || !empty($name) || !empty($location) || !empty($apply) || !empty($experience) || !empty($company)|| !empty($dob) || !empty($mobile) || !empty($salary) || !empty($file)) {
 $host = "localhost:3306";
    $dbUsername = "Jayant99";
    $dbPassword = "Jayant@99";
    $dbname = "submitResume";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
     die('Connect Failed: ' $conn->connect_error);
    } else {
     // $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (email, name, location, apply, experience, company, dob, mobile, salary, file) values(?, ?, ?, ?, ?, ?,? ,?,?,?)";
     //Prepare statement
    // $stmt = $conn->prepare($INSERT);
     //$stmt->bind_param("s", $email);
     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("ssssisdisb", $email, $name, $location, $apply, $experience, $company, $dob, $mobile, $salary, $file);
     $stmt->execute();
     echo "New record inserted sucessfully";
     $stmt->close();
     $conn->close();

     // $stmt->bind_result($email);
     // $stmt->store_result();
 //    $rnum = $stmt->num_rows;
     //if ($rnum==0) {
      //$stmt->close();
//       $stmt = $conn->prepare($INSERT);
//       $stmt->bind_param("ssssisdisb", $email, $name, $location, $apply, $experience, $company, $dob, $mobile, $salary, $file);
//       $stmt->execute();
//       echo "New record inserted sucessfully";
//      } else {
//       echo "Someone already register using this email";
//      }
//      $stmt->close();
//      $conn->close();
//     }
// } else {
//  echo "All field are required";
//  die();
// }
?>

?>
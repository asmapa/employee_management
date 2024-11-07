<?php
    include("database.php");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=filter_input(INPUT_POST,"yourname",FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST,"emailaddress",FILTER_SANITIZE_EMAIL);
        $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $phone=filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS);
        $gender=filter_input(INPUT_POST,"gender",FILTER_SANITIZE_SPECIAL_CHARS);
        $dob=filter_input(INPUT_POST,"dob",FILTER_SANITIZE_SPECIAL_CHARS);
        $bank_account=filter_input(INPUT_POST,"bank_account",FILTER_SANITIZE_SPECIAL_CHARS);        
        $ifsc=filter_input(INPUT_POST,"ifsc",FILTER_SANITIZE_SPECIAL_CHARS);
        $doj=filter_input(INPUT_POST,"doj",FILTER_SANITIZE_SPECIAL_CHARS);
        $depid=filter_input(INPUT_POST,"depid",FILTER_SANITIZE_SPECIAL_CHARS);
        $designation=filter_input(INPUT_POST,"Designation",FILTER_SANITIZE_SPECIAL_CHARS);

        $sql="INSERT INTO employee(ename,password,gender,dob,bank_acc_no,ifsc_code,dept_id,designation,date_of_joining,e_ph,e_mail)
                VALUES('$username','$password','$gender','$dob','$bank_account','$ifsc','$depid','$designation','$doj','$phone','$email')";

        mysqli_query($conn,$sql);

        mysqli_close($conn);
    }


/*/*<?php

echo "PHP is running";
$servername = "localhost"; // or the IP address
$username = "root";
$password = ""; // or empty if you set no password
$dbname = "employee_management"; // Replace with your actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


/*$name = $_POST['yourname'];
$email_address = $_POST['emailaddress'];
$password = $_POST['password']; 
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$bank_account_num = $_POST['bank_account'];
$ifsc_code = $_POST['ifsc'];
$date_of_join = $_POST['doj'];
$dept_id = (int)$_POST['depid']; 
$designation = $_POST['Designation'];



// Echo each value
/*echo "Name: " . $name . "<br>";
echo "Email Address: " . $email_address . "<br>";
echo "Password: " . $password . "<br>";
echo "Phone: " . $phone . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Date of Birth: " . $dob . "<br>";
echo "Bank Account Number: " . $bank_account_num . "<br>";
echo "IFSC Code: " . $ifsc_code . "<br>";
echo "Date of Joining: " . $date_of_join . "<br>";
echo "Department ID: " . $dept_id . "<br>";
echo "Designation: " . $designation . "<br>";

$sql = "INSERT INTO registration (name, email_address, password, phone, gender, dob, bank_account_num, ifsc_code, date_of_join, dept_id, designation) 
VALUES ('$name', '$email_address', '$password', '$phone', '$gender', '$dob', '$bank_account_num', '$ifsc_code', '$date_of_join', $dept_id, '$designation')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
?>

*/
?>

<?php
 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $fathersname = filter_input(INPUT_POST, 'fathersname');
 $rollno= filter_input(INPUT_POST, 'rollno');
 $department = filter_input(INPUT_POST, 'department');
 if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($fathersname)){
if (!empty($rollno)){
if (!empty($department)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO login (firstname,lastname,fathersname,rollno,department)
values ('$firstname','$lastname','$fathersname','$rollno','$department')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "firstname should not be empty";
die();
}
}
else{
echo "lastname should not be empty";
die();
}
}
}
 }
?>
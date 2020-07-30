<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql="INSERT INTO organdonation (fname,lname,age,sex,blood,organs,country,peraddress,district,state1,pincode,email,mobno,efname,elastname,relation,eage,eperaddress,estate,edistrict,eemail,emobno) 
VALUES('$_POST[firstname]', '$_POST[lastname]','$_POST[age1]','$_POST[sex]','$_POST[bloodgroup]','$_POST[organs]','$_POST[country]','$_POST[personaladdress]','$_POST[dist]','$_POST[state]','$_POST[pincode]','$_POST[emailid]','$_POST[mobileno]','$_POST[efirstname]','$_POST[elastname]','$_POST[relation]','$_POST[eage1]','$_POST[epersonaladdress]','$_POST[estate]','$_POST[edist]','$_POST[eemailid]','$_POST[emobileno]')";
if ($conn->query($sql) === TRUE) {
  echo "
    <p>You suceessfully registered for Organ Donation.</p>
    <p>Tell your wish to your friends and family.</p>
    <p>To get your Donar Card kindly fill the upcoming form</p>";


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<form action="pdfreg.php">
  <button type="submit">Continue</button>
</body>
<html>
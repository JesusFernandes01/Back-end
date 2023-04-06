<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "sdb-56.hosting.stackcp.net";
   $username  = "student90-35303133fd54";
   $passwd = "ua92-studentAc";
   $dbname ="student90-35303133fd54";
*/
$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student90-35303133fd54", "ua92-studentAc", "student90-35303133fd54");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/
if (isset($_POST['submit'])) {

    $s1 = $_POST['StName'];
    $s2 = $_POST['Title'];
    $s3 = $_POST['FName'];
    $s4 = $_POST['LName'];
    $s5 = $_POST['DOB'];
    $s6 = $_POST['YearGrp'];
    $s7 = $_POST['ClassID'];
    $s8 = $_POST['ParentID'];
    $s9 = $_POST['Address'];
/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $sql = "INSERT INTO PUPILS (StID,Title,FirstName,LastName,DateOfBirth,YearGroup,ClassID,ParentsID,Address) VALUES ('$StName','$Title','$FName','$LName','$DOB','$YearGrp','$ClassID','$ParentID','$Address')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>
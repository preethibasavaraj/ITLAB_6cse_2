<?php
$link=mysqli_connect("localhost","root","root","2016cse081");
if($link==false) {
die("error: could not connect.".mysqli_connect_error($link));
}
$sql="INSERT INTO data (fname,lname,age) VALUES('$_POST[fname]','$_POST[lname]','$_POST[age]')";
if(mysqli_query($link,$sql))
{
echo "records inserted successfully.";
}
else {
echo "error could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>

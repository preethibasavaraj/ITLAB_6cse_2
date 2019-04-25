<?php
$link=mysqli_connect("localhost","root","root","2016cse081");
if($link==false) {
die("error: could not connect.".mysqli_connect_error($link));
}
$sql="DELETE FROM data WHERE age='50'";
if(mysqli_query($link,$sql))
{
echo "record was deleted successfully.";
}
else {
echo "error could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>

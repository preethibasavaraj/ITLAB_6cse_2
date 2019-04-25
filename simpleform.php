<html>
<body>
<form action="<?php PHP_SELF ?>" method="post">

name:
<input type="text" name="name" value="<?php echo $name;?>"/>
email:
<input type="text" name="email" value="<?php echo $email;?>"/>
website:<input type="text" name="website" value="<?php echo $website;?>"/>
comment:<textarea name="comment" rows="5" cols="40">
<?php echo $comment;?></textarea>
gender:<input type="radio" name="gender"
<?php if (isset($gender)&& $gender=="female") echo "checked";?>
value="female">female
<input type="radio" name="gender"
<?php if (isset($gender)&& $gender=="male") echo "checked";?>
value="male">male
<input type="radio" name="gender"
<?php if (isset($gender)&& $gender=="others") echo "checked";?>
value="others">others

<?php
$name=$email=$gender=$comment=$website="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$website=test_input($_POST["website"]);
$comment=test_input($_POST["comment"]);
$gender=test_input($_POST["gender"]);
}
function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>
<input type="submit">
</body>
</html>

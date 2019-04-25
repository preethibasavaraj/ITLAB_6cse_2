<html>
<body>
<?php
function addfive($num) {
$num+=5;
}
function addsix(&$num) {
$num+=6;
}
$orignum=10;
addfive($orignum);


echo "Original value is $orignum<br/>";
?>
</body>
</html>

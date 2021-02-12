<!-- <?php

//shell_exec('convert aa.pdf[2] aa.jpg');
//echo aa.jpg;
?> -->
<!-- <?php 
//$imgUrl = "aa.jpg"; 
//shell_exec('convert \aa.pdf[2] \aa.jpg');
?> 
//<img src="<?php echo aa.jpg;?> "/>  -->


<?php 
// putenv("PATH=/usr/local/bin");
$A = shell_exec('convert aa.jpg a.jpg 2<&1');
echo $A;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src="<?php echo $A;?> ">
</body>
</html>

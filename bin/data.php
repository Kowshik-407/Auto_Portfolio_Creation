<!DOCTYPE html>
<html lang="en">
<head>
<title> Week 7</title>
</head>
<body bgcolor= "<?php $c=$_GET['bcl'];
 echo $c;?>" >
<?php print_r($_GET); ?>
<?php
$a=$_GET['uname'];
echo "<h1 style='color:green;'>". "Welcome $a"."</h1>"; 
?>
</body>
</html>
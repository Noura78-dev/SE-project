<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	body {
	  background-color: SkyBlue;
	}
	
	</style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>صفحة المستخدم</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css-style.css">
   <div class="content">
	<a href="contact us.html" class="btnn">مركز التواصل</a>
	</div>
   
</head>
<body>

<div class="container">

   <div class="content">
      <h3><span>الصفحة الرئيسية</span></h3>
      <h1> <span><?php echo $_SESSION['user_name']?></span> أهلا بك</h1>
		<br><br><br><br>
      
      <a href="register_child.php" class="btn">سجل أولادك</a>
      <a href="personal.html" class="btn">الصفحة الشخصية</a>
   </div>

</div>

</body>
</html>
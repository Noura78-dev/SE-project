<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
   $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $id = NULL;

   $select = " SELECT * FROM user_form WHERE email = '$email' ";
	$sel2 = "SELECT id_user FROM user_form ORDER BY id_user DESC LIMIT 1";
	
   $result = mysqli_query($conn, $select);
   $result2 = mysqli_query($conn, $sel2);
   
   
   if(mysqli_num_rows($result2) > 0){
	   $row=mysqli_fetch_assoc($result2);
	   $id = (int)$row['id_user'] + 1;
   }else{
	   $id = 1;
   }

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(f_name, l_name, email, password,cpassword,id_user) VALUES('$f_name','$l_name','$email','$pass','$cpass','$id')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
	body {
	  background-color: SkyBlue;
	}
	input {
    border: 2px solid black;
	}
   div.content {

box-shadow: 10px 10px 10px gray;
font-weight: bold;
height:110px;
width:100px;
margin-left:5px;
margin-top:5px;
box-shadow: 10px 10px 10px gray;
}
div#right{
	float:right;
}
div#left{
	float:left;
}

</style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>نمودج التسجيل</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css-style.css">

</head>
<body>
      <div class="content" id="right"><img src=pictures/logo.png alt= > </div>
   <div class="content" id="left"><img src=pictures/logo2.png alt= > </div>
<div class="form-container">

   <form action="" method="post">
      <h3>سجل الآن</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="f_name" required placeholder="أدخل اسمك الأول">
	  <input type="text" name="l_name" required placeholder="أدخل اسمك الأخير">
      <input type="email" name="email" required placeholder="أدخل بريدك الإلكتروني">
      <input type="password" name="password" required placeholder="أدخل كلمة المرور">
      <input type="password" name="cpassword" required placeholder="أكد كلمة المرور">

      <input type="submit" name="submit" value="قم بالتسجيل الآن" class="form-btn">
      <p>هل لديك حساب؟ <a href="login_form.php">تسجيل الدخول الآن</a></p>
   </form>

</div>

</body>
</html>
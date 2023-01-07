<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
		
      $row = mysqli_fetch_array($result);
	  $_SESSION['user_name'] = $row['f_name'];
      header('location:user_page.php');

   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>نموذج تسجيل الدخول</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css-style.css">
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
</head>
<body>
   <div class="content" id="right"><img src=pictures/logo.png alt= > </div>
   <div class="content" id="left"><img src=pictures/logo2.png alt= > </div>
<div class="form-container">

   <form name="f1" action="" onsubmit = "return validation()" method="POST" >
      <h3>سجل دخولك الآن</h3>
	  	<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="ادخل بريدك الألكتروني" >
      <input type="password" name="password" required placeholder="ادخل كلمة المرور">
      <input type="submit" name="submit" value="تسجيل الدخول الآن" class="form-btn">
	  <p><a href="">هل نسيت كلمة المرور؟</a> </p>
      <p>ليس لديك حساب؟ <a href="register_form.php">سجل الآن</a></p>
   </form>

</div>
<script>
	function validation()
	{
		var id=document.f1.email.value;
		var ps=document.f1.password.value;
		if(id.length=="" && ps.length=="") {
			alert("User Name and Password fields are empty");
			return false;
		}
		else
		{
			if(id.length=="") {
				alert("User Name is empty");
				return false;
			}
			if (ps.length<6) {
				alert("Password should be 6 charecter at least");
				return false;
			}
		}	
	}
</script>

</body>
</html>
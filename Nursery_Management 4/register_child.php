<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $first_name = $_POST['firstName'];
   $last_name = $_POST['lastName'];
   $nationality = $_POST['nationality'];
   $place_birth = $_POST['placeBirth'];
   $date_birth = $_POST['dateBirth'];
   $age = $_POST['age'];
   $gender = $_POST['radio'];
   $id = NULL;
   $sel = "SELECT id FROM register_child_info ORDER BY id DESC LIMIT 1";
   $result = mysqli_query($conn, $sel);

   if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_assoc($result);
        $id = (int)$row['id'] + 1;
    }else{
        $id = 1;
    }

    $insert = "INSERT INTO register_child_info(first_name, last_name, nationality, place_birth,date_birth,	age,gender, id
    ) VALUES('$first_name','$last_name','$nationality','$place_birth','$date_birth','$age','$gender','$id')";
    mysqli_query($conn, $insert);
    header('location:register_child_2.php');
}
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج تسجيل الأطفال</title>
    <link rel="stylesheet" href="css/css-registerChild.css">
		<style>
	body {
	  background-color: SkyBlue;
	}
	h1 {
	  margin-left:80px;
	}
    input{
    text-align: right;
    } 
	</style>

</head>
<body>
	<div class="content">
    
        <div class="signup-form bg-dark">
            <div class="Signup-head bg-warning">
                <h1 >قم بتسجيل ابنك الآن</h1>
	
            </div>
            
            <form action="" method="post">
            <div class="signup-content" >
                <input type="radio"  class="radio" name="radio" required value="male" checked onclick="EnableDisableTB();">
                <label class="text-white" >ذكر</label>
                <input type="radio" class="radio" name="radio" value="female">
                <label class="text-white">انثى</label>
            </div>

            <div class="signup-content2">
			<input type="text" name="firstName" required placeholder="الأسم الأول" class="input bg-dark">
			<input type="text" name="lastName" required placeholder="الأسم الأخير" class="input bg-dark">
			<input type="text" name="nationality" required placeholder="الجنسية" class="input bg-dark">
			<input type="text" name="placeBirth" required placeholder="مكان الولادة" class="input bg-dark"><br>
			<input type="date" name="dateBirth" required placeholder="تاريخ الولادة" class="input bg-dark"><br>
            <input type="number" name="age" class="bg-dark person" required placeholder="العمر"  min="0"  >
            <br><br>
            <input type="submit"  name="submit" value="المزيد من المعلومات" class="submit-btn bg-warning">
			<!-- <a href="register_child_2.php" class="btn"> المزيد من المعلومات</a> -->

        </div> 
        </form>
        </div>
   
    </div>

</body>
</html>
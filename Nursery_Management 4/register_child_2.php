<?php

@include 'config.php';
session_start();

if(isset($_POST['submit'])){
   $mix = mysqli_real_escape_string($conn,$_POST['mix']);
   $other_name = mysqli_real_escape_string($conn,$_POST['other_name']);
   $disease = mysqli_real_escape_string($conn,$_POST['disease']);
   $disease_name = NULL;
   if (isset($_POST['disease_name']) )
	{
		$disease_name = $_POST['disease_name'];
	}
   $speech_difficultie = mysqli_real_escape_string($conn,$_POST['speech_difficultie']);
   $child_fears = mysqli_real_escape_string($conn,$_POST['child_fears']);
   $namePerson = mysqli_real_escape_string($conn,$_POST['namePerson']);
   $kinship = mysqli_real_escape_string($conn,$_POST['kinship']);
   $Signature = mysqli_real_escape_string($conn,$_POST['Signature']);
   $date = mysqli_real_escape_string($conn,$_POST['date']);   
   $id = NULL;
   $sel = "SELECT id FROM register_child_info ORDER BY id DESC LIMIT 1";
   $result = mysqli_query($conn, $sel);

   if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_assoc($result);
        $id = (int)$row['id'];
    }else{
        $id = 1;
    }

    $update = "UPDATE register_child_info SET mix_others = '$mix', other_name = '$other_name', disease = '$disease', disease_name = '$disease_name'
    ,speech_difficultie = '$speech_difficultie',child_fears = '$child_fears', name_parent = '$namePerson', kinship_child = '$kinship', signature = '$Signature', 
    date_register = '$date' WHERE id = $id";
    if (mysqli_query($conn, $update))
        $success [] = 'Child has been registerd successfully';
    else
    $error [] = 'Child has not been registerd successfully';

    
    // header('location:login_form.php');

};

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
    input { 
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
				<label class="label" >هل يجب للطفل الاختلاط بالأخرين؟</label>
                <input type="radio" class="radio" name="mix" required value="male" checked>
                <label class="text-white">نعم</label>
                <input type="radio" class= "radio" name="mix" value="female">
                <label class="text-white">لا</label>
            </div>
			<div class="signup-content" >
				<label class="label" >هل ينادى الطفل باسم غير اسمه؟</label>
                <input type="radio" class="radio" name="other_name" required value="male" checked style="margin-right:16px;">
                <label class="text-white">نعم</label>
                <input type="radio" class= "radio" name="other_name" value="female">
                <label class="text-white">لا</label>
            </div>
            <div class="signup-content" >
				<label class="label" >   هل يعاني الطفل من أي مرض؟  </label>
                <input type="radio" class="radio" name="disease" required value="male" id="reID" checked onclick="EnableDisableTB();" style="margin-right:26px;">
                <label class="text-white">نعم</label>
                <input type="radio" class= "radio" name="disease" value="female"  onclick="EnableDisableTB();">
                <label class="text-white">لا</label><br>
            </div>      
            <div class="signup-content" >     
                <input type="text" name="disease_name" id="nameDise" required  class="input bg-dark" style="margin-right:55px;">
				<label class="label" > :إذ يعاني الرجاء ذكره</label><br><br>
            </div>
            <div class="signup-content" >
				<label class="label" >   هل يعاني من بعض الصعوبات في النطق؟ </label>
                <input type="radio" class="radio" name="speech_difficultie" required value="male" checked >
                <label class="text-white">نعم</label>
                <input type="radio" class= "radio" name="speech_difficultie"  value="female" >
                <label class="text-white">لا</label>
            </div>  
            
            <div class="signup-content" >     
                <input type="text" name="child_fears"  required  class="input bg-dark">
				<label class="label" > ماهي الأشياء التي يخافها الطفل؟</label><br><br><br>
            </div>    
            <div class="signup-content" >     
                <input type="text" name="namePerson"  required  class="input bg-dark">
				<label class="label" > :اسم الشخص الذي قام بتعبئة الاستمارة</label><br><br>
            </div>  
            <div class="signup-content" >     
                <input type="text" name="kinship"  required  class="input bg-dark" style="margin-right:99px;">
				<label class="label" > :صلة القرابة بالطفل</label><br><br>
            </div> 
            <div class="signup-content" >     
                <input type="text" name="Signature"  required  class="input bg-dark" style="margin-right:161px;">
				<label class="label" > :التوقيع</label><br><br>
            </div> 
            <div class="signup-content" >     
                <input type="date" name="date"  required  class="input bg-dark" style="margin-right:161px;">
				<label class="label" > :التاريخ</label>
            </div> 
            <br><br>
            <input type="submit"  name="submit" value="حفظ" class="submit-btn bg-warning">
            <?php
				if(isset($error)){
					echo '<br><br><br><br>';
					foreach($error as $error){
					echo $error;
					}; 
				};
				if(isset($success)){
					echo '<br><br><br><br>';
					foreach($success as $success){
					echo $success;
					}; 
				}
				
			?>
            </form>
        </div>
    </div>
    <script type="text/javascript">
		function EnableDisableTB(){
			var reRad = document.getElementById("reID");
			var nameDise = document.getElementById("nameDise");
			nameDise.disabled = reRad.checked? false:true;
		}
	</script>

</body>
</html>
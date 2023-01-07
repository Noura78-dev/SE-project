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
			<input type="text" name="dateBirth" required placeholder="تاريخ الولادة" class="input bg-dark"><br>
            <input type="number" name="age" class="bg-dark person" placeholder="العمر"  min="0"  >
            <input type="submit"  name="submit" value="حفظ" class="submit-btn bg-warning">
			<a href="register_child_2.php" class="btn"> المزيد من المعلومات</a>

        </div> 
		
        </div>
    </div>

</body>
</html>
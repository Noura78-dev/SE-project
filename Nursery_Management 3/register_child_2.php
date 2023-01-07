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
            <div class="signup-content" >
				<label class="label" >هل يجب للطفل الاختلاط بالأخرين؟</label>
                <input type="radio" class="radio" name="radio" required value="male" checked>
                <label class="text-white">نعم</label>
                <input type="radio" class= "radio" name="radio" value="female">
                <label class="text-white">لا</label>
            </div>
			<div class="signup-content" >
				<label class="label" >هل ينادى الطفل باسم غير اسمه؟</label>
                <input type="radio" class="radio" name="radio" required value="male" checked style="margin-right:16px;">
                <label class="text-white">نعم</label>
                <input type="radio" class= "radio" name="radio" value="female">
                <label class="text-white">لا</label>
            </div>
            <div class="signup-content" >
				<label class="label" >   هل يعاني الطفل من أي مرض؟  </label>
                <input type="radio" class="radio" name="radio" required value="male" id="reID" checked onclick="EnableDisableTB();" style="margin-right:26px;">
                <label class="text-white">نعم</label>
                <input type="radio" class= "radio" name="radio"  value="female"  onclick="EnableDisableTB();">
                <label class="text-white">لا</label><br>
            </div>      
            <div class="signup-content" >     
                <input type="text" name="name" id="nameDise" required  class="input bg-dark" style="margin-right:55px;">
				<label class="label" > :إذ يعاني الرجاء ذكره</label><br><br>
            </div>
            <div class="signup-content" >
				<label class="label" >   هل يعاني من بعض الصعوبات في النطق؟ </label>
                <input type="radio" class="radio" name="radio" required value="male" checked >
                <label class="text-white">نعم</label>
                <input type="radio" class= "radio" name="radio"  value="female" >
                <label class="text-white">لا</label>
            </div>  
            
            <div class="signup-content" >     
                <input type="text" name="things"  required  class="input bg-dark">
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
                <input type="text" name="date"  required  class="input bg-dark" style="margin-right:161px;">
				<label class="label" > :التاريخ</label>
            </div> 
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
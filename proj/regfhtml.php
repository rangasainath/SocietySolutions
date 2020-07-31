
<html>
<head><title>register page</title>
<script>
function validate(thisform){
var em=thisform.em.value;
var un=thisform.un.value;
var ps=thisform.ps.value;
var ad=thisform.ad.value;
var pn=thisform.pn.value;

if(em==null||un==null||ps==null||ad==null||pn==null)
{
  alert("enter th all fields");
  thisform.em.focus();
}


return true;
}
</script>
</head>
<body>
  <center>
    <div>

  <form method="post" action="reg.php">
    Email-id:</br>
<input type="textfield" name="emailid" id="em"> <span class="error">* <?php echo $emailidE;?></span></br>
username:</br>
<input type="textfield" name="username"id="un"><span class="error">* <?php echo $usernameE;?></span></br>
password:</br>
<input type="password" name="password" id="ps"> <span class="error">* <?php echo $password1E;?></span></br>
<!--password:</br>
<input type="password" name="password2"> </br>
-->
Aadhar number:</br>
<input type="textfield" name="Adno" id="ad"><span class="error">* <?php echo $adharE;?></span></br>
phone no:</br>
<input type="textfield" name="phno" id="pn"><span class="error">* <?php echo $phnoE;?></span></br>
 <!--submit</but
-->
Gender:</br>
male:
<input type="text" name="rb"><span class="error">* <?php echo $genderE;?></span>
<!--female:
<input type="radio" name="rb">
other:
<input type="radio" name="rb">--></br>
<input type="submit" name="submit">
</form>

</div>

</center>
</body>

</html>

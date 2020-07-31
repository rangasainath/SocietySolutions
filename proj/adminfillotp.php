<html>
<head><meta name="viewport" container="width=display-width , initial-scale=1.0">
<style>

.body{
  padding:0px;
  margin:0px;
background-color: rgb(0,0,0,0.8);
}
header
{
padding-bottom:15px;
margin-top: 0px;
  height:100px;
  width:100%;
  background-color:#45CE30;
  position:absolute;
}
footer{
background-color:rgb(0,0,0,0.9);
  color:white;
  padding-bottom:-60px;
  width:100%;
  margin-right: 0px;
margin-bottom: 0px;
border:1px;
border-color:#45CE30;
}
form{
    height:300px;
    width:600px;
padding-right: 0px;
padding-bottom:0px;
margin-left:500px;
margin-top:300px;
position:relative;
}
table{
border:1px solid black;
border-radius:10px;
background-color: rgb(0,0,0,0.8);


}
.input{
  margin:20px;
  width:290px;
  height:50px;
  border:1px solid #45CE30;
  border-radius:30px;
  background-color: white;
  background:transparent;
}



.button{
margin:20px;
background-color:#45CE30;
border-radius:20px;
  height:30px;
}

img{
  width:98%;
  height:90px;
}





@media screen and (max-width:800px){
  form{
    padding-right: 0px;
    padding-bottom:0px;
    margin-left:100px;
    margin-top:150px;
  }
}
@media screen and (max-width:500px){
header
{
padding-bottom:15px;
margin-top: 0px;
  height:100px;
  max-width:100%;
}
footer{
  padding-bottom:-60px;
  max-width:100%;
}
}
}
</style>
<header>
<center><font style="color:black;font-size:80px;font-stretch:condensed;">SOCIETY SOLUTIONS</font></center>

</header>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$db="project1";
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn)
{
  echo "connected succesfully";
}
else {
  echo "connection failed";
}
 if(isset($_POST["verify"]))
 {
   session_start();
   $otp=$_POST["otpnum"];
   $phno=$_SESSION['phno'];
   $sql="SELECT OTP FROM redata WHERE phno='$phno'";
   $query=mysqli_query($conn,$sql);
   if($query)
   {
     $otpa=mysqli_fetch_assoc($query);
     $otpc=$otpa["OTP"];
     if($otpc==$otp)
     {
       echo "otp match";
       echo '<script>window.location.href="../proj/adminsetpass.php"</script>';
     }
     else{
       echo "otp doesnot match";
       echo '<script>window.location.href="../proj/forgotpass.php"</script>';
     }
   }
   else{
     echo "query not properly executed";
   }
 }




 ?>
 <section class="form">
<form method="POST" action="adminfillotp.php" enctype="multipart/form-data">
<table><tr><td><input class="input" type="text" name="otpnum" placeholder="enter otp sended to ur mobile "></td></tr>
<tr><tr><td><input class="button" type="submit" name="verify" value="verify"></td></tr>
</table>
</form>

</section>
<footer>
  <ul>
<li><a style= "color:grey" href="https://www.gmail.com">GMAIL</a></li>
</br>
<li><a style= "color:grey" href="https://www.facebook.com">FACEBOOK</a></li>
</br>
<li><a style= "color:grey" href="https://www.instagram.com">instagram</a></li>
  </br>
<li>PLEASE FOLLOW</li>
</br>
</ul>

<ul>
<!--<li>mascellenios </li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>-->
</ul>
</footer>

</body>
</html>

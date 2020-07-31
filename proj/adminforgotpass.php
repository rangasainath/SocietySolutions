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



</style></head>
<body>
  <header>
<center><font style="color:black;font-size:80px;font-stretch:condensed;">SOCIETY SOLUTIONS</font></center></br>
</br>
</br>
</br>
</header>
  <?php

  $servername="localhost";
  $username="root";
  $password="";
  $db="project1";
  $conn=mysqli_connect($servername,$username,$password,$db);
  if(!$conn)
  {
    die("connection failed:".mysqli_connect_error());
  }
  else
  {
    echo"connected succefully";
  }
  $phnoEr="";
  $phno="";
  if(isset($_POST["submit"]))
  {
    SESSION_START();
    function test_input($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    if(empty($_POST["phno"]))
    {
      $phnoEr="enter phone number";
    }
    else {
      $phno=test_input($_POST["phno"]);
    }
  }

  $randomnumber=rand(10000,99999);

 require('textlocal.class.php');
  require('cred.php');

  $textlocal = new Textlocal(false, false, API_KEY);

  $numbers = array($phno);
  $sender = 'TXTLCL';
  $message = "hello"."this is ur OTP".$randomnumber;

  try {
      $result = $textlocal->sendSms($numbers, $message, $sender);
      echo "send successfully";
  } catch (Exception $e) {
      die('Error: ' . $e->getMessage());
  }



//post
/*$url="https://www.way2sms.com/api/v1/sendCampaign";
$message = urlencode("$randomnumber");// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=NCM6CJGJPSDFHKD8W7T9ZOTQ1L9DAOQE&secret=2OG1HXGAZ0TBA9ST&usetype=stage&phone=$phno&senderid=punnasainath@gmail.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;*/

$sql="UPDATE redata SET OTP='$randomnumber' WHERE phno='$phno'";
$query=mysqli_query($conn,$sql);
if($query)
{
echo "";
$_SESSION['phno']=$phno;
//header("location:adminfillotp.php");
echo '<script>window.location.href="../proj/adminfillotp.php"</script>';
}
else{
  echo "not updated";
}
}
   ?>
   <div class="form">
   <form action="adminforgotpass.php" method="POST">
     <table><tr><td><input class="input" type="textfield" name="phno" placeholder="enter ur phone number"></td></tr></br>
     <tr><td><input class="button"type="submit" name="submit" value="SendOTP"></td></tr>
   </table>
   </form>
   </div>
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

<!docTYPE html>
<html>
<head>
<!--  <meta charset="utf-8">
  <link rel="StyleSheet" type="text/css" href="logincss.php">

</head>-->
<meta name="viewport" container="width=display-width , initial-scale=1.0">
<style>
body{
  color:white;
/*  background-image: url("6.jpeg");*/


padding:0px;
margin:0px;
/*  background-image: url("6.jpeg");*/

}


.list {
 padding:0px;
 margin:0px;
height:50px;
width:120px;
display:inline-block;
background-color:  #45CE30;
color:white;
line-height: 80px;
}
.butdiv1
{
padding-right:10px;
height:50px;
width:110px;
display:inline-block;
background-color: #45CE30;
color:white;
line-height: 80px;
}
.butdiv
{
padding-right:10px;
height:50px;
width:110px;
display:inline-block;
background-color: #45CE30;
line-height: 80px;
}
button{
padding:26px;
margin:0px;
background: transparent;
border:none;
font-size: 16px;
}
.navigation{
display:flex;
justify-content:space-between;
height:80px;
width:100%;
padding-top:5px;
padding-bottom:5px;
margin-top: 80px;
background-color:black;
}
.a{
align:center;
color:white;
font-family:fantasy;
padding-top:10px;
  /*margin-top:10px;*/

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
  padding-left:0px;
  padding-bottom:0px;
    padding-top:0px;
    padding-bottom: 0px;
  width:100%;
  margin-right: 0px;
margin-bottom: 0px;
margin-left: 0px;
margin-top: 0px;

}
form{
  border:1px solid grey;
  height:430px;
  width:280px;
  padding-left:50px;
  padding-top:90px;
  padding-bottom:50px;
  padding-right:50px;
  margin-left:1020px;
  background-color:rgb(0,0,0,.8);
margin-top:10px;
position:realtive;
}
input{
width:100%;
margin-bottom:30px;
  border:none;
    border-bottom:1px solid white;
  outline:none;
  font-size:16px;
  font-family:fantasy;
  background:transparent;
  color:white;
}
.form .input.label{

  transition: .5%;
}
.form .input:focus ~label
{
  top:-10px;
}
legend{
  font-family:fantasy;
  font-size:22px;
  align:center;
  padding-bottom:20px;
  padding-left:80px;
}
.img{
  border:1px;
  border-radius: 150px 150px 150px 150px;
  position:absolute;
  margin-top: 100px;
  margin-left: 200px;}
  img:hover{
  transform:rotateY(150deg);

}
label{
  font-family:fantasy;
  position:absolute;
  margin-left:10px;
  margin-top:-40px;
  margin-right:20px;
}
.form input[type="submit"]{
  background:transperant;
padding-top:10px;
padding-bottom:0px;
margin-bottom:25px;
  color:white;
  align:'center';
}
a{
  font-family:fantasy;

    font-size:16px;
    padding-top:-50px;
    padding-bottom:10px;
    padding-left:10px;
    color:white;
    background:transparent;
}
@media screen and (min-width:450px) and (max-width:600px){
    header
    {
    padding-bottom:15px;
    margin-top: 0px;
      height:100px;
      max-width:100%;
    }
    footer{
      margin-right: 0px;
    margin-bottom: 0px;
  margin-left: 0px;
  margin-top: 0px;
      width:100%;
      padding-left:0px;
      padding-bottom:0px;
        padding-top:0px;
        padding-bottom: 0px;

    }
    .img{
      border:1px;
      border-radius: 150px 150px 150px 150px;
      position:absolute;
      margin-top: 100px;
      margin-left: 20px;
      height:350px;
      width:350px;
    }
    form{
      border:1px solid grey;
      height:430px;
      width:280px;
      padding-left:50px;
      padding-top:90px;
      padding-bottom:50px;
      padding-right:50px;
      margin-left:20px;
      background-color:rgb(0,0,0,0.8);
    margin-top:650px;
    position:realtive;
    }
    .form .input.label{

      transition: .5%;
    }
    .form .input:focus ~label
    {
      top:-10px;
    }
    }
    @media screen and (min-width:900px) and (max-width:1100px){
        header
        {
        padding-bottom:15px;
        margin-top: 0px;
          height:100px;
          max-width:100%;
        }
        footer{
          margin-right: 0px;
        margin-bottom: 0px;
      margin-left: 0px;
      margin-top: 0px;
          width:100%;
          padding-left:0px;
          padding-bottom:0px;
            padding-top:0px;
            padding-bottom: 0px;

        }
        .img{
          border:1px;
          border-radius: 150px 150px 150px 150px;
          position:absolute;
          margin-top: 100px;
          margin-left: 20px;
          height:350px;
          width:350px;
        }
        form{
          border:1px solid grey;
          height:430px;
          width:280px;
          padding-left:50px;
          padding-top:90px;
          padding-bottom:50px;
          padding-right:50px;
          margin-left:400px;
          background-color:rgb(0,0,0,0.8);
        margin-top:10px;
        position:realtive;
        }
        .form .input.label{

          transition: .5%;
        }
        .form .input:focus ~label
        {
          top:-10px;
        }
        }

        @media screen and (min-width:1100px)and (max-width:1300px){
            header
            {
            padding-bottom:15px;
            margin-top: 0px;
              height:100px;
              max-width:100%;
            }
            footer{
              margin-right: 0px;
            margin-bottom: 0px;
          margin-left: 0px;
          margin-top: 0px;
              width:100%;
              padding-left:0px;
              padding-bottom:0px;
                padding-top:0px;
                padding-bottom: 0px;

            }
            .img{
              border:1px;
              border-radius: 150px 150px 150px 150px;
              position:absolute;
              margin-top: 100px;
              margin-left: 50px;
              height:350px;
              width:350px;
            }
            form{
              border:1px solid grey;
              height:430px;
              width:280px;
              padding-left:50px;
              padding-top:90px;
              padding-bottom:50px;
              padding-right:50px;
              margin-left:540px;
              background-color:rgb(0,0,0,0.8);
            margin-top:10px;
            position:realtive;
            }
          }
</style>
</head>
<header>
  <center><font style="color:black;font-size:80px;font-stretch:condensed;">SOCIETY SOLUTIONS</font></center></br>
  </br>
  </br>
  </br>
</header>
<body>
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

$emailidE="";
  $usernameE="";
  $password1E="";
$genderE="";
  $phnoE="";
  $adharno="";
  $emailid="";
  $username="";
    $password1="";
    $gender="";
    $phno="";
      $adharE="";
if(isset($_POST['submit']))
{
  session_start();
  function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["emailid"]))
    {
  $emailidE="enter email id";
}
else{
  $emailid=test_input($_POST["emailid"]);
}

if(empty($_POST["username"]))
{
$usernameE="enter username";
}
else{
  $username=test_input($_POST["username"]);
}
if(empty($_POST["password"]))
{
$password1E="enter password";
}
else{
  $password1=test_input($_POST["password"]);
}
if(empty($_POST["rb"]))
{
$genderE="enter GENDER";
}
else{
$gender=/*mysqli_real_escape_string*/test_input($_POST["rb"]);
}
if(empty($_POST["phno"]))
{
$phnoE="PHONE NO";
}
else{
$phno=/*mysqli_real_escape_string*/test_input($_POST["phno"]);
}
if(empty($_POST["Adno"]))
{
$adharE="AAdhar no";
}
else{
  $adharno=test_input($_POST["Adno"]);
}
}


$OTP=0;


$sql="INSERT INTO redata(email_id,username,password,gender,aadharno,phno,OTP)VALUES('$emailid','$username','$password1','$gender','$adharno','$phno',$OTP)";

      $query=mysqli_query($conn,$sql);

      if(!$sql)
      {
        echo"not inserted";
      }
else if($query)
{

echo "successfully registered";
      header("location:adminlogi.php");
        echo '<script>window.location.href="../proj/adminlogi.php"</script>';
}
else if(!$query){
  echo "$sql".mysqli_connect_error($conn,$query);
}

else {

echo"Enter the form";

}
}

mysqli_close($conn);
?>
<div class="navigation">
    <div class="li"><ul>
<li class="list"><a href="index.php" class="a">HOME</a></li>
<div class="butdiv1"><button class="but"><a href="adminlogi.php">ADMIN</a></button></div>
</ul>
</div>
</div>

<img src="6.jpeg" height="400px"width="600px" class="img">

<form method="post" action="adminreg.php">
<table>
  <tr><th><label>Email-id:</label></br></th>
<td><input type="textfield" name="emailid" id="em"> </td><td><span class="error"><?php echo $emailidE;?></span></br></td></tr>
<tr><th><label>username:</label></br></th>
<td><input type="textfield" name="username"id="un"></td><td><span class="error">* <?php echo $usernameE;?></span></br></td></tr>
<tr><th><label>password:</label></br></th>
<td><input type="password" name="password" id="ps"> </td><td><span class="error">* <?php echo $password1E;?></span></br></td> </tr>
<!--password:</br>
<input type="password" name="password2"> </br>
-->
<tr><th><label>Aadhar number:</label></br></th>
<td><input type="textfield" name="Adno" id="ad"></td><td><span class="error">* <?php echo $adharE;?></span></br></td> </tr>
<tr><th><label>phone no:</label></br></th>
<td><input type="textfield" name="phno" id="pn"></td><td><span class="error">* <?php echo $phnoE;?></span></br></td> </tr>
<!--submit</but
-->
<tr><th><label>Gender:</label></th>
<td><input type="text" name="rb"></td><td><span class="error">* <?php echo $genderE;?></span></td></tr>
<!--female:
<input type="radio" name="rb">
other:--><tr colspan="2"><td><input type="submit" name="submit"></td></tr>
</table>
</form>


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

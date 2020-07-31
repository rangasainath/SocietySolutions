<!DoctypeHTML>
<html>
<head><title>login</title>
<link rel="StyleSheet" type="text/css" href="logincss.php">

<meta name="viewport" container="width=display-width , initial-scale=1.0">
<style>
body{
  padding:0px;
  margin:0px;
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
@media screen and (max-width:500px){
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
    }
    @media screen and (max-width:900px){
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
        }
</style>
</head>
<header>
  <center><font style="color:black;font-size:80px;font-stretch:condensed;">SOCIETY SOLUTIONS</font></center></br>
  </br>
  </br>
  </br>
</header>

<body background='1.jpeg' align="center" style='background-repeat:repeat; text-align:justify'>








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
$emailidERR="";
$password1ERR="";
$emailid="";
$password1="";
$pass="";
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
                      $emailidERR="email id is required";
                }
                else{
                      $emailid=test_input($_POST["emailid"]);

                    }
          if(empty($_POST["password"]))
              {
                $password1ERR="password is required";
              }
          else
              {
                  $password1=test_input($_POST["password"]);
                }
          }
          $_SESSION['emailid']=$emailid;
$sql="SELECT email_id,password FROM redata WHERE email_id='$emailid'";

  $query=mysqli_query($conn,$sql);
          if(!$query)
                    {
                        echo"not selected";
                        }
            elseif($query)
                    {
                $pa=mysqli_fetch_assoc($query);
                $pass=$pa["password"];
                $em=$pa["email_id"];
             if(($pass==$password1) && ($em==$emailid))
                    {
                  echo "successfully logged in";
                    //header("location:adminretriev.php");
                    echo '<script>window.location.href="../proj/adminretriev.php"</script>';

                  }
                else {
                    echo "password doesnot match";
                      /*header("location:login.html");*/
                      }
                  }
      else {
            echo"some thing went wrong";
              echo "Error:".mysqli_error($conn);
              }
}
else
{
  echo"No";
}
mysqli_close($conn);
?>
<div class="navigation">
    <div class="li"><ul>
<div class="butdiv1"><button class="but"><a href="adminlogi.php">ADMIN</a></button></div>
<div class="butdiv"><button class="but"><a href="logi.php">LOGIN</a></button></div>
</ul>
</div>
</div>
<div class="form">
<form method="POST" action="adminlogi.php">

<div class="childf">
<legend>ADMIN LOGIN </legend>
<table> <tr><th> <label>  Email-id:</label></th>

<td colspan="2"><input type="textfield" name="emailid"> </td><td><?php echo $emailidERR;?></td></tr></br>
<tr>
<th><label>Password:</label></th>
<td colspan="2"><input type="password" name="password"><td><td><?php echo $password1ERR;?></td></tr> </br>

<tr align="center">
<td>
<input type="submit" name="submit" value="LOGIN"></td>
<td class="1"><a href="adminreg.php">SIGNUP</a></td> <td class="1"><a href="adminforgotpass.php">FORGOTPASSWORD</a></td>
</tr>
</table>
</div>
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
</footer>
</body>
</html>

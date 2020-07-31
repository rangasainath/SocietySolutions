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
background-color:#45CE30;
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
  margin-top: 90px;
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
    background-color: #45CE30;

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
<!--  <center><img src="images (2).png" width=35% height=90px style="padding:10px;"></center></br>-->
<center><font style="color:black;font-size:80px;font-stretch:condensed;">SOCIETY SOLUTIONS</font></center>
  </br>
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
$sql="SELECT password FROM redata WHERE password='$password1'";

  $query=mysqli_query($conn,$sql);
          if(!$query)
                    {
                        echo"not selected";
                        }
            elseif($query)
                    {
                $pa=mysqli_fetch_assoc($query);
                $pass=$pa['password'];

             if($pass==$password1)
                    {
                  echo "successfully logged in";
                    //header("location:retriev.php");
                      echo '<script>window.location.href="../proj/retriev.php"</script>';
                  }
                else {
                    echo "password doesnot match";
                      /*header("location:login.html");*/
                        echo '<script>window.location.href="../proj/logi.php"</script>';
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
<li class="list"><a href="adminlogi.php" class="a">Admin</a></li>
<li class="list"><a href="logi.php" class="a">login</a></li>
</ul>
</div>
</div>
<form method="POST" action="logi.php">
<legend>USER LOGIN </legend>
<table> <tr><th> <label>  Email-id:</label></th>

<td colspan="2"><input type="textfield" name="emailid"> </td><td><?php echo $emailidERR;?></td></tr></br>
<tr>
<th><label>Password:</label></th>
<td colspan="2"><input type="password" name="password"><td><td><?php echo $password1ERR;?></td></tr> </br>

<tr align="center">
<td>
<input type="submit" name="submit" value="LOGIN"></td>
<td class="1"><a href="reg.php">SIGNUP</a></td> <td class="1"><a href="forgotpass.php">FORGOTPASSWORD</a></td>
</tr>
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

<html><head>
<style>
.ec{height:210px;
  width:300px;
  border:2px solid black;
  display:inline-block;
  overflow:hidden;
  margin:5px;
/*  flex-direction:row;
  justify-content:center;*/
padding:15px;
  }
.tr{
 border:1px solid black
}
.body{
  padding:0px;
  margin:0px;
background-color: rgb(0,0,0,0.8);
}

 .list {
   padding:0px;
   margin:0px;
  height:50px;
  width:110px;
  display:inline-block;
background-color: #45CE30;
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

 height:50px;
 width:110px;
 display:inline-block;
background-color: #45CE30;
color:white;
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
  margin-top:80px;
background-color:black;
}
a {
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
margin-top: 0px;}
 /*form{
     height:300px;
     width:600px;
 padding-right: 0px;
 padding-bottom:0px;
 margin-left:500px;
 margin-top:300px;
 position:relative;
 }*/
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


 img:hover{
   transform: scale(2.2);
   transition:0.4s;
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





/* @media screen and (max-width:800px){
   form{
     padding-right: 0px;
     padding-bottom:0px;
     margin-left:100px;
     margin-top:150px;
   }
 }*/
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
 .navigation{
   display:flex;
   justify-content:space-between;
   height:80px;
   width:100%;
   padding-top:5px;
   padding-bottom:5px;
   margin-top:90px;
 background-color:black;
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
   .navigation{
     height:80px;
     max-width:100%;
     padding-top:5px;
     padding-bottom:5px;
     margin-top:80px;
   background-color:black;
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
</br></br></br></br>
<div class="navigation">
    <div class="li"><ul>
<li class="list"><a href="index.php" class="a">HOME</a></li>
<li class="list"><a href="retriev.php" class="a">COMPLAINTS</a></li>
<li class="list"><a href="uploadhtml.php" class="a">UPLOAD</a></li>
</ul>
</div>
</div>
<?php
session_start();
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
  echo "</br></br></br>";
}
$emailid=$_SESSION['emailid']/*'punnasainath@gmail.com'*/;
$emailidERR="";
/*if(isset($_POST['submit']))
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


          }*/
$sql="SELECT * FROM storedata WHERE emailid='$emailid'";

 $query=mysqli_query($conn,$sql);
          if(!$query)
                    {
                        echo"not selected";
                        }
            elseif($query)
                    {
              while($im=mysqli_fetch_assoc($query))
              {
//print_r($im);
 $image=$im['image'];
  $locname=$im['locname'];
  $location=$im['loc'];
  $descr=$im['descr'];
  $emailid=$im['emailid'];
echo "<div class='ec'>";
echo "<table>";
echo "<tr class='tr'><td style='color:red;'>Emailid</td><td> $emailid</td></tr>";
echo "<tr class='tr'><td style='color:red;'>locname</td><td>{$im['locname']}</td></tr>";
echo "<tr class='tr'><td style='color:red;'>loc</td><td>{$im['loc']}</td></tr>";
echo "<tr class='tr'><td style='color:red;'>image</td><td><a href='{$im['image']}'><img src='{$im['image']}'height=200px width=200px></a></td></tr></br>";
echo "<tr class='tr'><td style='color:red;'>DESCR</td><td>{$im['descr']}</td></tr>";
echo "</table>";
echo "</div>";
//  print_r($image);
}
}
else {
echo"some thing went wrong";
echo "Error:".mysqli_error($conn);
}

mysqli_close($conn);
?>
<form action="logout.php" method="POST" enctype="multipart/form-data">
<input type="submit" name="logout" value="logout">
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

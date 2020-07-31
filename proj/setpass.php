<html>
<head>
  <meta name="viewport" container="width=display-width , initial-scale=1.0">

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
  margin-bottom:90px;
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
      margin-right: 0px;
      margin-bottom:90px;
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
  }<style>
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
    margin-top: 0px;

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
          margin-top:80px;
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
  /*  @media screen and (max-width:1200px){
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
      }*/



  </style>
}
</style>
</head>
<body>
  <header>
  <center><font style="color:black;font-size:80px;font-stretch:condensed;">SOCIETY SOLUTIONS</font></center></br>
  </br>
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
if($conn)
{
  echo "connected succesfully";
}
else {
  echo "connection failed";
}
$passwordE="";
 if(isset($_POST["update"]))
 {
   session_start();
   $emailid=$_POST["emailid"];
   $password=$_POST["password"];
   $confpassword=$_POST["confpassword"];
echo $password;
   echo $confpassword;
   if($password==$confpassword)
   {
   $sql="UPDATE redata SET password='$confpassword' WHERE email_id='$emailid'";
   $query=mysqli_query($conn,$sql);
   echo $query;
   if($query)
   {
     $passwordE="password updated";
   }
   elseif(!$query){
     $passwordE="password doesnot updated";
     echo "query not properly executed";
   }
   else {
     echo "something went wrong";
   }
 }
 else{
   echo "passwords doesnot match";
 }
 }
 ?>
 <div class="navigation">
     <div class="li"><ul>
 <li class="list"><a href="index.php" class="a">HOME</a></li>

 </ul>
 </div>
</div>
 <section class="form">
<form action="setpass.php" method="POSt" enctype="multipart/form-data">
<table>
<tr><td><input class="input" type="text" name="emailid" placeholder="enter emailid"></td></tr>
<tr><td><input class="input" type="password" name="password" placeholder="new password"></td></tr>
<tr><td><input class="input" type="password" name="confpassword" placeholder="confirm new password"></td><td><span><?php echo $passwordE;?></span></td></tr>
<tr><td><input class="button" type="submit" name="update" value="update"></td></tr>
</form>
</table>
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

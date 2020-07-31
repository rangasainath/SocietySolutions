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
  width:110px;
  display:inline-block;
background-color: grey;
color:white;
line-height: 80px;
}
.butdiv
{
  float:right;
  padding-right:10px;
 height:50px;
 width:110px;
 display:inline-block;
background-color: grey;
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
  height:80px;
  width:100%;
  padding-top:5px;
  padding-bottom:5px;
  margin-top: 10px;
background-color:black;
}
a {
  align:center;
  color:black;
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
}
footer{
  background-color:black;
  color:white;
  padding-bottom:-60px;
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
</head><header>
<img src="images (2).png" width=98% height=90px style="padding:10px;"></br>
</br>
</br>
</br>
</br>
</header>
<body background='1.jpeg' align="center" style='background-repeat:repeat; text-align:justify'>

<div class="navigation">
    <div class="li"><ul>
<li class="list"><a href="">HOME</a></li>
<li class="list"><a href="">COMPLAINTS</a></li>
<div class="butdiv"><button class="but"><a href="loginhtml.php">LOGIN</a></button></div>
</ul>
</div>
</div>


    <div class="form">
<form method="POST" action="logi.php">

  <div class="childf">
    <legend>LOG IN HERE</legend>
  <table> <tr><th> <label>  Email-id:</label></th>

<td colspan="2"><input type="textfield" name="emailid"> </td></tr></br>
<tr>
<th><label>Password:</label></th>
<td colspan="2"><input type="password" name="password"><td></tr> </br>

<tr align="center">
  <td>
<input type="submit" name="submit" value="LOGIN"></td>
<td class="1"><a href="reg.php">SIGNUP</a></td> <td class="1"><a href="forgotpass.php">FORGOTPASSWORD</a></td>
</tr>
<table>
</div>
</form>
</div>
<footer>
  <ul>
<li>mascellenios </li>
</br>
<li>some thing</li>
</br>
<li>some thing</li>
  </br>
<li>some thing</li>
</br>
</ul>

<ul>
<li>mascellenios </li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
<li>some thing</li>
</ul>
</footer>

</body>

</html>

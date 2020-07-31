<?php
header('Content-type: text/css; charset:UTF-8');
$color="white";
?>

body{
  color:<?=$color?>;

}
form{
  border:1px solid grey;
  height:230px;
  width:280px;
  padding-left:50px;
  padding-top:100px;
  padding-bottom:50px;
  padding-right:50px;
  margin-left:400px;
  background-color:rgb(0,0,0,.8);
margin-top:120px;
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
form .input.label{

  transition: .5%;
}
form .input:focus ~label
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
label{
  font-family:fantasy;
  position:absolute;
  margin-left:10px;
  margin-top:-40px;
  margin-right:20px;
}
form input[type="submit"]{
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

@media (max-width:600px){
body .input{
    margin:10px;
    }
    form{
      height:230px;
      width:280px;
      padding-left:50px;
      padding-top:100px;
      padding-right:50px;
      margin-left:50px;
      background-color:rgb(0,0,0,.8);
    margin-top:120px;
    }
}

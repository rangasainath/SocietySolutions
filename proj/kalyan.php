<html>
<head></head>
<body>
<?php
$hostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project1";
$conn =mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);
if($conn)
{
  echo "connected successfully";

}
else{
  echo "cannot connect".mysqli_connect_error($conn);
}
if(isset($_POST['submit']))
{
/*$user_name=filter_input(INPUT_POST,'username');
$user_mail=filter_input(INPUT_POST,'email');
$user_mobile=filter_input(INPUT_POST,'mobile');
$user_address=filter_input(INPUT_POST,'address');
$user_password=filter_input(INPUT_POST,'password');
$user_password1=filter_input(INPUT_POST,'password1');*/
$user_name=$_POST["username"];
$user_mail=$_POST["email"];
$user_mobile=$_POST["mobile"];
$user_address=$_POST["address"];
$user_password=$_POST["password"];
$user_password1=$_POST["password1"];

if(!empty($user_name))
{
    if(!empty($user_password))
    {






            if($user_password==$user_password1)
            {
                $sql = "INSERT INTO user(username,email,mobile,address,password) VALUES('$user_name','$user_mail','$user_mobile','$user_address','$user_password')";
                  $query=mysqli_query($conn,$sql);
                if($query)
                {
                    echo "inserted";
                    echo $user_password;
              }
            }
            else{
                echo "incorrect Username or Password";
            }




    }
    else
    {
         echo "please enter password";
    }

}
else
{
    echo "please enter username";
}
}
else{
  echo "data noot submitted";
}

?>
<form  method="POST" action="kalyan.php">
<input type="text" name="username">
<input  type="text" name="email">
<input  type="text" name="address">
<input  type="text" name="mobile">
<input  type="password" name="password">
<input  type="password" name="password1">
<input  type="submit" name="submit">
</form>
</body>
</html>

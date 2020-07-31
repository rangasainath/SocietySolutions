<html><head>

  <style>
  .body{
    padding:0px;
    margin:0px;
  color:white;
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
    .list {
      padding-left: 5px;
      margin-left:0px;
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
     padding-right:10px;
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
   font-family: fantasy;
   }
   footer{
   background-color:rgb(0,0,0,0.9);
     color:grey;
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
    .form{
        height:300px;
        width:600px;
    padding-right: 0px;
    margin-bottom:150px;
    margin-left:800px;
    margin-top:60px;
flex:initial;
flex-direction: row;
    }
    .a{
      align:center;
      color:white;
      font-family:fantasy;
    padding-top:10px;
        /*margin-top:10px;*/

    }
    table{
    border:1px solid black;
    border-radius:10px;
    background-color: rgb(0,0,0,0.8);
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

    .input{
      margin:20px;
      width:290px;
      height:50px;
      border:1px solid #45CE30;
      border-radius:30px;
      background-color: white;
      background:transparent;
      color:white;
      font-family: fantasy;
      font-size: 20px;
    }
    textarea{
      margin:20px;
      width:290px;
      height:50px;
      border:1px solid #45CE30;
      border-radius:30px;
      background-color: white;
      background:transparent;
      color:white;
      font-family: fantasy;
      font-size: 20px;
    }
    /*label{
      background-color:rgb(0,0,0,0.8);
      height:30px;
    }*/
    label{
    margin:20px;
    background-color:#45CE30;
    border-radius:20px;
      height:40px;
      width:290px;
      padding:10px;
    }
    input[type="file"]{
      display:none;
    }
    /*div{
      padding:5px 10px;
    /*  background:#00ad2d;*/


    /*  color:#fff;
      border-radius:2px;
      text-align:center;
      /*float:left;*/
      /*cursor:pointer

    }*/
    /*.button2 {
      margin:20px;
      background-color:#45CE30;
      border-radius:20px;
        border:1px solid #00ad2d;
        height:0px;

        opacity: 0;*
        cursor: pointer;
        right: 0;
        top: 0;
position:absolute;
        font-size: 24px;
        width: 100%;
    }*/

    .button{
    margin:20px;
    background-color:#45CE30;
    border-radius:20px;
      height:30px;
      position:relative;
    }

    img{
      width:98%;
      height:90px;
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
    .form{
      padding-right: 0px;
      padding-bottom:0px;
      margin-left:15px;
      margin-top:50px;
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
        .form{
          padding-right: 0px;
          padding-bottom:0px;
          margin-left:15px;
          margin-top:50px;
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
          .form{
            padding-right: 0px;
            padding-bottom:0px;
            margin-left:15px;
            margin-top:50px;
          }
        }

</style>
</head>
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

  $emailidE="";
    $locnameE="";
    $descE="";
  $imageE="";
    $locationE="";
    $emailid="";
    $locname="";
      $desc="";
      $image="";
      $location="";

  if(isset($_POST['submit']))
  {
    session_start();

    function test_input($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }


  //  $target_dir="uploads/";
    //$target_file=$target_dir.basename($_FILES["image"]["name"]);
    //$imagetype=explode(".",$target_file);
    //$imageFileType=strtolower(end($imagetype));
    //$uploadok=1;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      if(empty($_POST["emailid"]))
      {
    $emailidE="enter email id";
  }
  else{
    $emailid=test_input($_POST["emailid"]);
    $_SESSION["id"]=$emailid;
  }

  if(empty($_POST["locationname"]))
  {
  $locnameE="enter locname";
  }
  else{
    $locname=test_input($_POST["locationname"]);
  }
  if(empty($_POST["text"]))
  {
  $descE="enter description field";
  }
  else{
    $desc=test_input($_POST["text"]);
  }
  if(empty($_POST["location"]))
  {
  $loacationE="PHONE NO";
  }
  else{
  $location=/*mysqli_real_escape_string*/test_input($_POST["location"]);
  }

}

    $file=$_FILES['image'];
    print_r($file);




    //print_r($position);
     //for($j=0;$j<=count($_FILES['image']['name'])-1;$j++)
    // {
  $filename=$file['name'];
print_r( count($filename));
$count=count($filename);
echo $count;
    $filetmpname=$_FILES['image']['tmp_name'];
    $filesize=$_FILES['image']['size'];
    $fileerror=$_FILES['image']['error'];
    $filetype=$_FILES['image']['type'];
    $fileext=implode(".",$filename);
    print_r($filetype);
  //  for($i=0;$i<$count;$i++)
    /*{
  $fileext1=end($fileext[$i]);
  $fileactualext=strtolower($fileext1);
}
    $allowed=array('jpeg','jpg','png','pdf');
    if(in_array($fileactualext,$allowed))
    {
     if($fileerror === 0)
     {
       if($filesize<500000)
       {
         $filenewname=uniqid('',true).".".$fileactualext;*/

         for($i=0;$i<count($_FILES['image']['name']);$i++)
         {
           $filedest='uploads/'.$filename[$i];
         if(move_uploaded_file($filetmpname[$i],$filedest))
         {
           echo "image uploaded";
           $sql="INSERT INTO storedata(locname,loc,image,descr,emailid) VALUES ('$locname','$location','$filedest','$desc','$emailid')";

                   $query=mysqli_query($conn,$sql);
                   if(!$sql)
                   {
                     echo"not inserted";
                   }
                   else if($query)
                    {

                        echo "successfully registered";
                 //  header("location:uploadhtml.php");
                      }


                        else {

                            echo"Enter the form";
                              echo "error".mysqli_error($conn);

                              }

                              echo '<script>window.location.href="../proj/uploadhtml.php"</script>';
            }

       else{
         echo "can not upload";
       }
     }
       /*}
       else{
         $imageE="upload image less than 500mb";
       }
     }
     else {
       $imageE="there was some error uploading file";
       print_r($fileerror);
     }
    }
    else{
      $imageE="you cannot upload any file of this type";
    }*/
  }








  mysqli_close($conn);
  ?>
  <div class="navigation">
      <div class="li"><ul>
  <li class="list"><a href="index.php"class="a">HOME</a></li>
  <li class="list"><a href="retriev.php"class="a">COMPLAINTS</a></li>

  <div class="butdiv"><button class="but"><a href="uploadhtml.php" style="color:white;">UPLOAD</a></button></div>
  </ul>
  </div>
  </div>
    <section class="form">
  <form method="post" action="uploadhtml.php" enctype="multipart/form-data">
<table text-align="left">
<tr><th>locationname:</th>
<td><input class="input" type="textfield" name="locationname" placeholder="Enter locationame" required></td><td><span><?php echo $locnameE;?></span></td>
<br>
</tr>
<tr>
<th>Description:</th>
<td><textarea rows="4" cols="50" name="text" placeholder="Enter Description" required>

</textarea>
</td><td><span><?php echo $descE;?></span></td></tr>
<tr><th>location:</th>
<td><input class="input" type="textfield" name="location" placeholder="Enter location" required></td><td><span><?php echo $locationE;?></span></td><br></tr>



<tr><th>emailid</th>
<td><input class="input" type="textfield" name="emailid" placeholder="Enter emalid" required></td><td><span><?php echo $emailidE;?></span></td></tr>
<tr><th>image:</th>
<td><label>/      CHOOSE FILE    /<input class="button2" accept=".gif,.jpg,.png,.jpeg,.tiff,.ico,image/*,video/*" type="file" name="image[]" placeholder="choosefile" value="choosefile" multiple></label></td></tr>

<tr><center><td><input class="button" type="submit" name="submit" value="UPLOAD" ></td><td><span><?php echo $imageE;?></span></td></td></center><br></tr>
</table>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</form>
</section>
</br>
</br>
</br>
</br>

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

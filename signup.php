<?php
   $con = mysqli_connect('localhost','root','','facebookclone');
   $id = $_POST['firstname'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $phoneormail = $_POST['phoneormail'];
   $password = $_POST['password'];

   $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE phoneormail=
   '$phoneormail'");
   $check = mysqli_num_rows($check_data);

   if($check > 0){
       header("Location:http://localhost/facebookclone-main");
   }
   else{
    $input = mysqli_query($con,"INSERT INTO userdata (id,firstname,lastname,
    phoneoremail,password) VALUES ('$id','$firstname','$lastname',
    '$phoneoremail','$password')");
    
    if($input){
    header("Location:http://localhost/facebookclone-main/mainpage.html");
    }
    }
    ?>

   

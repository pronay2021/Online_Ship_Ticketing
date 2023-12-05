<?php

if(isset($_POST['submit']))
{
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Number=$_POST['phone'];
    $Password=$_POST['password'];

    $Con=mysqli_connect('localhost','root','','bayone');

    

    $dup_Email=mysqli_query($Con,"SELECT * from register WHERE Email = '$Email'");
    $dup_UserName=mysqli_query($Con,"SELECT * from register WHERE UserName = '$Name'");

    if(mysqli_num_rows($dup_Email))
    {
        echo "
        <script>
           alert('This Email is already taken');
           window.location.href='Register.html';
        </script>
        ";
    }
    if(mysqli_num_rows($dup_UserName))
    {
        echo "
        <script>
           alert('This User Name is already taken');
           window.location.href='Register.html';
        </script>
        ";
    }
    else{
        mysqli_query($Con,"INSERT INTO `register`( `UserName`, `Email`, `Nunber`, `Password`) VALUES ('$Name','$Email','$Number','$Password')");

        echo "
        <script>
           alert('Register Successful');
           window.location.href='Register.html';
        </script>
        ";

    }

}

?>
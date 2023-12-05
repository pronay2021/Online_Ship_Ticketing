<?php
 $name =$_POST['name'];
 $password=$_POST['password'];

 $con =mysqli_connect('localhost','root','','bayone');
 $result=mysqli_query($con,"SELECT * FROM register WHERE (UserName = '$name' or Email= '$name') AND Password='$password'");

 session_start();



 if(mysqli_num_rows($result))
 {

 $_SESSION['logIn']="yes";
    echo "
    <script>
       alert('Successfully Login');
       window.location.href='wabPage.php';
    </script>
    ";
 }
 else {
    echo "
    <script>
       alert('Incorrect Email or Password');
       window.location.href='Login.html';
    </script>
    ";
 }

?>
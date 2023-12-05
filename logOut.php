<?php

session_start();

$_SESSION['logIn']="No";

echo "
<script>
   alert('Successfully Log Out');
   window.location.href='wabPage.php';
</script>
";

?>
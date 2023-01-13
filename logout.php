<?php
session_start();
   unset($_SESSION['userid']);

   echo "<script>
   alert('You have sucessfully Logged out ');
   window.location.href='http://localhost/project2/html/main.php';
   </script>";
?>
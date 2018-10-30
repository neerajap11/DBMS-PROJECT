<?php

session_start();
setcookie(session_name(), "", time() - 3600);

session_destroy();
session_write_close();
echo '<script> alert("succesfully logged out!!")</script>';
header('Location:index.php');

?> 


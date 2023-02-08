<?php

session_start();

session_destroy();

echo "<script>window.open('../dashboard/login.php','_self')</script>";

?>
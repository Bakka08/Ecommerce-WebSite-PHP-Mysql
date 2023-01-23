<?php

include 'connect.php';

session_start();
session_unset();
session_destroy();

header('location:../superadmin/superadmin_login.php');

?>
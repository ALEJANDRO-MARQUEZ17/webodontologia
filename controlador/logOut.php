<?php
session_start();
session_destroy();
header('Location: /webodontologia/login.php')
?>
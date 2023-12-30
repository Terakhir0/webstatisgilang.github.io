<?php

require_once "core/init.php";

session_destroy();
if(isset($_SESSION['user'])) header('Location: login.php');



?>
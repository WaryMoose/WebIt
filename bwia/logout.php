<?php

session_start();

session_unset();

session_destroy();

header("Location: /tutorials/LogIn/index.php");

?>
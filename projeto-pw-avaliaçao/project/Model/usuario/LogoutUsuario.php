<?php

session_start();
session_destroy();
header("Location: ../../View/usuario/login.html");
exit;
?>
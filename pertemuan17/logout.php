<?php
session_start();
session_unset();
session_destroy();
setcookie('id', '', time() - 20000);
setcookie('key', '', time() - 20000);
header('Location: login.php');
exit;

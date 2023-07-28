<?php
session_start();
session_destroy();
header('Location:webpage1.php');
?>
<?php
session_start();
session_destroy();

if (isset($_SESSION['admin'])) {
header("Location:index.php?ok2");
}else{
    header("Location:index.php");
}
<?php
session_start();
if (session_destroy()) {
    header("location:admin.php");
    exit();
}

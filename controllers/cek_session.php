<?php

session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] === NULL || $_SESSION['username'] === '')
{
    header('Location:index.php');
}
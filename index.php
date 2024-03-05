<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: pages/index.php');
} else {
    header('Location: login.php');
}

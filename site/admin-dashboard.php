<?php
session_start();


//check of iemand is ingelogd
if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit;
}


//check of iemand een admin rol heeft
if($_SESSION['role'] != "admin"){
    header("location: store.php");
    exit;
}


/// is de gebruiker een administrator??
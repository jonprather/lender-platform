<?php 

$name = $_POST["name"];

session_start();

$_SESSION["fName"]=$name;


if($name==="Jim") {
    header("Location: proptected-page.php");
}
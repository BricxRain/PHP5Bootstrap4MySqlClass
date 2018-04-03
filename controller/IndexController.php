<?php
include_once("../config/MySqlClass.php");

if (isset($_REQUEST['checkLogin'])) {
    checkLogin();
}

function checkLogin() {
    $Username = $_REQUEST['Username'];
    $Password = $_REQUEST['Password'];
    $db = new MySqlClass();
    $result = $db->getData("SELECT * FROM tblpersonalinformation WHERE firstname='$Username' AND lastname='$Password'");
    echo json_encode($result);
}

?>
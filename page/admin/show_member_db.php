<?php
    // include "../../condb.php";
    require_once ("../../condb.php");

    $sql = "SELECT * FROM tbl_member";

    $result = mysqli_query($condb,$sql) or die("Error in sql : $sql");

    // $row = mysqli_fetch_array($result);

?>
<?php
    include('config.php');

    $obj = new config();//object creation

    $deleteid = $_REQUEST['deleteid'];
    $conn = $obj->db_connection();

    if($conn == false)
    {
        die("Sorry,there is an error!");
    }

    $obj->db_delete_client_details($deleteid);
    $res = $obj->db_execute();

    if($res == 1)
    {
        header("location:../view_table.php");
    }
?>
<?php
    include('config.php');

    $updateid = $_REQUEST['updateid'];
    $Client_Name = $_REQUEST['cname'];
    $Client_Project = $_REQUEST['cproject'];
    $About_Project = $_REQUEST['aproject'];
    $Project_Theam = $_REQUEST['ptheam'];
    $Start_Date = $_REQUEST['sdate'];
    $End_Date = $_REQUEST['edate'];
    $Domain_Name = $_REQUEST['dname'];
    $Domain_Expiry = $_REQUEST['dexpiry'];

    $obj = new config();

    $conn = $obj->db_connection();
    if($conn == false)
    {
        die("error");
    }

    $obj-> db_update_client_details($updateid,$Client_Name,$Client_Project,$About_Project,$Project_Theam,$Start_Date,$End_Date,$Domain_Name,$Domain_Expiry);
    $res = $obj->db_execute();
    if($res == 1)
    {
        header("location:../view_table.php");
    }
?>
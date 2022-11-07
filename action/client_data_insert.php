<?php
    include('config.php');
    $Client_Name = $_POST['cname'];
    $Client_Project = $_POST['cproject'];
    $About_Project = $_POST['aproject'];
    $Project_Theam = $_POST['ptheam'];
    $Start_Date = $_POST['sdate'];
    $End_Date = $_POST['edate'];
    $Domain_Name = $_POST['dname'];
    $Domain_Expiry = $_POST['dexpiry'];
   
    $obj = new config();//object creation

    $conn = $obj->db_connection();
    if($conn == false)
    {
        die("error");
    }

    $obj->db_insert_client_details($Client_Name,$Client_Project,$About_Project,$Project_Theam,$Start_Date,$End_Date,$Domain_Name,$Domain_Expiry);
    $res = $obj->db_execute();
    if($res == 1)
    {
        header("location:../view_table.php");
    }
?>
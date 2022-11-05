<?php
    class config
    {
        var $servername = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "db_client_data";

        function db_connection() 
        {
            $this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->database);
            return $this->conn;
        }
        function db_execute()
        {
            $this->result = mysqli_query($this->conn,$this->sql);
            return $this->result;
        }
        function tb_insert_client_details($Client_Name,$Client_Project,$About_Project,$Project_Theam,$Start_Date,$End_Date,$Domain_Name,$Domain_Expiry)
        {
            $this->client_name = $Client_Name;
            $this->client_project = $Client_Project;
            $this->about_project = $About_Project;
            $this->project_theam = $Project_Theam;
            $this->start_date = $Start_Date;
            $this->end_date = $End_Date;
            $this->domain_name = $Domain_Name;
            $this->domain_expiry = $Domain_Expiry;
            
            $this->sql = "INSERT INTO `tb_client_details`(`client_name`, `client_project`, `about_project`, `project_theam`, `start_date`, `end_date`, `domain_name`, `domain_expiry`) VALUES ('$Client_Name','$Client_Project','$About_Project','$Project_Theam','$Start_Date','$End_Date','$Domain_Name','$Domain_Expiry')";
        }
        function db_select_view() //
        {
            $this->sql = "SELECT * FROM `tb_client_details`";
        }
        
    }
?>
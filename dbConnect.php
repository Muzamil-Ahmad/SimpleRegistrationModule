<?php 
    class databaseConnection 
    {  
        function createConnection() 
        {   
            $servername="localhost";
            $username="root";
            $password="";
            $database="regdb";
            $conn = new mysqli($servername,$username,$password,$database);
            if ($conn->connect_error) 
            {
            die("Connection failed: " . $conn->connect_error);
            } 
            return $conn; 
        }
    }  
?>  
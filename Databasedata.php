<?php
require_once 'dbConnect.php';

class databasedata
	{
		private $db;    
        function __construct()
        {   
           $con_obj = new databaseConnection();
           $this->db = $con_obj->createConnection();
               
        } 
		function getdata()
		{
			$sql="SELECT * from user";
			$result=$this->db->query($sql);
			return $result;
			
		
		}
	}

	$databd=new databasedata();
    $result=$databd->getdata();
    require_once 'TableDesign.php';
	

	?>



<?php  
require_once 'dbConnect.php';  
 
    
     class dbFunction
     {  
            
        private $db;    
        function __construct()
        {   
           $con_obj = new databaseConnection();
           $this->db = $con_obj->createConnection();
               
        }  
         
        public function UserRegister($username,$regNumber, $dob, $phoneNumber, $email, $address, $regDate,$userphoto)
        {  
           
                
             $sql="INSERT INTO user (name,regNumber,dob,phoneNumber,email,address,regDate,photo) VALUES('".$username."','".$regNumber."','".$dob."', '".$phoneNumber."','".$email."','".$address."','".$regDate."','".$userphoto."')";

                 $result=mysqli_query($this->db,$sql); 
                 return $result;
               
        } 
        public function UserUpdate($id, $username, $regNumber, $dob, $phoneNumber, $email, $address, $regDate,$userphoto)
        { 
         $id = $_POST['id'];
         $sql="UPDATE user SET name='$username', regNumber='$regNumber', dob='$dob' ,phoneNumber='$phoneNumber', email='$email', address='$address' ,regDate='$regDate', photo='$userphoto' where id=".$id. "";
            $result=mysqli_query($this->db,$sql); 
                return $result;
               
        }   
         
        public function isUserExist($email)
        {  
            $sql = mysqli_query($this->db,"SELECT * FROM user WHERE email = '.$email.'");  
            $row = mysqli_num_rows($sql);  
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
    } 

?>  
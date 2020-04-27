
<?php
 /**
  * 
  */
 // require_once 'dbConnect.php';
 require_once 'dbFunction.php';


 class Registration extends databaseConnection 
 {
        private $db;
         function __construct()
         {
            $obj_conn= new databaseConnection();
            $this->db=$obj_conn->createConnection();
         }
         function submitRegistration($postData)
         {
            
                $username = $postData['uname'];
                $address = $postData['address']; 
                $regNumber = $postData['regNumber'];
                $dob = $postData['dob']; 
                $email =$postData['email']; 
                $phoneNumber = $postData['phoneNumber'];  
                $regDate = $postData['regDate'];
                $userPhoto =$postData['userPhoto'];

                 $obj_dbfun = new dbFunction();

                $register =$obj_dbfun->UserRegister($username, $regNumber, $dob, $phoneNumber, $email, $address, $regDate,$userPhoto); 
                  
                if($register)
                {  
                         echo "<script>alert('Registration Successful')</script>";  
                         header('Location: http://localhost/testproject/databasedata.php'); 
                }
                else
                {  
                        echo "<script>alert('Registraton Unsuccessful')</script>";  
                }
        }
                function UpdateRegistration($postData) 
                {
                    $id = $postData['id'];
                    $username = $postData['uname'];
                    $address = $postData['address']; 
                    $regNumber = $postData['regNumber'];
                    $dob = $postData['dob']; 
                    $email =$postData['email']; 
                    $phoneNumber = $postData['phoneNumber'];  
                    $regDate = $postData['regDate'];
                    $userPhoto =$postData['userPhoto'];

                    $obj_dbfun1 = new dbFunction();

                    $register =$obj_dbfun1->UserUpdate($id, $username, $regNumber, $dob, $phoneNumber, $email, $address, $regDate,$userPhoto); 
                      
                    if($register)
                    {  
                             echo "<script>alert('Updatation Successful')</script>";  
                             header('Location: http://localhost/testproject/databasedata.php'); 
                    }
                    else
                    {  
                            echo "<script>alert('Updatation Unsuccessful')</script>";  
                    }


                }
                 function deleteReg($postdata)
                  {

                       $regid=$_GET['id'];
                       $sql="DELETE FROM user WHERE  id='$regid' ";
                       mysqli_query($this->db,$sql); 

                       header('Location: http://localhost/testproject/databasedata.php'); 


                  }


                  function editReg($id)
                  {
                    $id = $id;
                    $sql="SELECT * FROM user where id='$id' ";
                    $result =mysqli_query($this->db, $sql);
                    $formdata = mysqli_fetch_assoc($result);
                    return $formdata;
                    // include("index.php");
                 }

}
   
?>


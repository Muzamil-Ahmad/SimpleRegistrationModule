<?php

require_once 'Registration.php';
$obj_Reg = new Registration();

// print_r($_SERVER['REQUEST_METHOD']);
// die();
// var_dump($obj_Reg);
// die();

// print_r($_POST);
// die();
 if(isset($_GET['id']) && isset($_GET['eddit']) ==1)
 {
    $formdata = $obj_Reg->editReg($_GET['id']);
 } 
 else if( isset($_GET['id']) && isset($_GET['delete']) ==1){
        
        $obj_Reg->deleteReg($_GET['id']);
 
 } else if(isset($_POST['id']) && $_POST['register_btn']=="register"){
        
        $obj_Reg->UpdateRegistration($_POST);
  
 } elseif($_SERVER['REQUEST_METHOD']=="POST"){
        
        $obj_Reg->submitRegistration($_POST);

 }else{}

 include_once 'IndexDesign.php'
?>

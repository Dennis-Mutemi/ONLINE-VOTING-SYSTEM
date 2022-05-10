<?php
require_once("autoload.php");
$obda=new database();
if(isset($_GET["edit"])){
  $id=$_GET["edit"];
  $query="SELECT * FROM user_details WHERE USER_ID='$id'";
     $res=$obda->read($query,[]);        
     if(is_array($res)){
         $res=$res[0];
         $name= $res->NAME;
         $username= $res->USERNAME;
         $email= $res->EMAIL;
         $reg= $res->REG_NO;
         $pass= $res->PASSWORD;
         $course= $res->COURSE;
         $gender= $res->GENDER;
         $schol= $res->SCHOOL;
          $iddd= $res->USER_ID;

         
        
        }} ?>    
	 

   
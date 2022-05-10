<?php
require_once("API.php");
$datatype="";
if(isset($_POST['data_type'])){
    $datatype=$_POST['data_type'];
}
$destinat="";
if(isset($_FILES['user_profile_image'])){
       if($_FILES['user_profile_image']['error']==0){
           $folde="uploads/";
           if(!file_exists($folde)){
               mkdir("uploads",0777,true);
           }
           $destinat=$folde . $_FILES['user_profile_image']['name'];
           move_uploaded_file($_FILES['user_profile_image']['tmp_name'],$destinat);
           
       }
}

if( $datatype=="user_image"){
    if($destinat!=""){
        $id=$_SESSION["user_id"];
        $query="UPDATE user_details SET IMAGE='$destinat' WHERE USER_ID='$id' LIMIT 1";
        $obda->write($query,[]);
    }
}


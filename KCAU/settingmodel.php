<?php
if(isset($_SESSION["user_id"])){
$userid= $_SESSION["user_id"];
$query="SELECT * FROM user_details WHERE USER_ID=$userid LIMIT 1;";
$res=$obda->read($query,[]);
if(is_array($res)){     
           $res=$res[0];
           $info->name=$res->NAME;
           $info->email=$res->EMAIL;
           $info->reg=$res->REG_NO;
           $info->course=$res->COURSE;
           $info->school=$res->SCHOOL;
           $info->gender=$res->GENDER;
           $image=($res->GENDER=='Male')?'man.png':'female.png';
           if($res->IMAGE!=""){
                 $image=$res->IMAGE;
           }
           $info->img=$image;                    
           $res->profile_valu=$info;
           $res->data_type="user_profile";
           echo json_encode($res);

      }
     
}
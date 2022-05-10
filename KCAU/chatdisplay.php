<?php
$query="SELECT * FROM user_details LIMIT 4";
$res=$obda->read($query,[]);
if(is_array($res)){
           $users=array();
           $values=(object)[];
           $values->val_data="";
           $users=$res;
           foreach ($users as $value){
            $values->val_data.="<div userid='$value->USER_ID' onclick='userchaid(event)' style='background:#aa;cursor:pointer;'>$value->NAME</div><hr>";            
           }            
           $values->datatype="userschat";
           echo json_encode($values); 

      }
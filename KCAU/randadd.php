<?php
 $data_values=false; 
 $data_values["username"]=$conv_obj->specific; 
 if(empty($conv_obj->specific)){
      $rror.="Please select specificity.<br>";
      
 }
 $data_values["rankkkk"]=$conv_obj->rankval; 
 if(!preg_match("/^[a-zA-Z a-zA-Z ]*$/" ,$conv_obj->rankval)){
    $rror.="Please enter a valid rank.<br>"; 
}
else{
    if(empty($conv_obj->rankval)){
      $rror.="Please enter rank.<br>";
    }
}
if($rror==""){   
    $query_insert="INSERT INTO rank (LEVEL,GENE) VALUES (:rankkkk,:username)";
    $res=$obda->write($query_insert,$data_values);
         if($res){  
              $info->data_type="rankinfo";              
              echo json_encode($info);
              
         }
             
    }
else{
    $info->data_type="error1";
    $info->mess=$rror;    
    echo json_encode($info);                    
    }

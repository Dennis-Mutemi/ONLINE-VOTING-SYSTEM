<?php 
    $data_values=array();
    $data_values["user"]=$_SESSION['user_id'];   
    $query_insert="SELECT * FROM user_details WHERE USER_ID=:user LIMIT 1";
    $res=$obda->read($query_insert,$data_values);
          if(is_array($res)){     
               $res=$res[0];
               $image=($res->GENDER=='Male')? 'man.png':'female.png';
               if(file_exists($res->IMAGE)){
                         $image=$res->IMAGE;
               }
               $info->img=$image;
               $info->data_type="user_img";
               echo json_encode($info);       
               }
               
            
    
    
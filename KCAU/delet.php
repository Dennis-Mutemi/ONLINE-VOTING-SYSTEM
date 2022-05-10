<?php
 if(isset($conv_obj->id)){
      $id=$conv_obj->id;
      $query="DELETE FROM user_details WHERE USER_ID=$id;";
      $res=$obda->write($query,[]);       
      $info->data_type="del";
      echo json_encode($info);
      die();  
       
 }
 if(isset($conv_obj->idd)){
  $arr_cand=array();
  $arr_cand["rank"]=null;
  $arr_cand["userid"]=$conv_obj->idd;
  $update_que="UPDATE user_details SET RANK = :rank,T_VOTES = 0 WHERE USER_ID = :userid";
  $output=$obda->write($update_que,$arr_cand);      
  $info->data_type="dellc";
  echo json_encode($info);
  die(); 
       
}
 $info->error="";
 if(!empty($conv_obj->name)){
        if (!empty($conv_obj->user_idd)) {
             if(!empty($conv_obj->level)){              
              $arr_cand=array();
              $arr_cand["rank"]=$conv_obj->level;
              $arr_cand["userid"]=$conv_obj->user_idd;
              $update_que="UPDATE user_details SET RANK = :rank  WHERE USER_ID = :userid";
              $output=$obda->write($update_que,$arr_cand);
              if($output){
                  $info->data_type="candidate";
                  $info->success="Candidate added successifully";
                  echo json_encode($info);
                 }
                 else{
                  $info->data_type="candidate";
                  $info->success="An error occured,kindly try again";
                  echo json_encode($info);
                 }                
             }else{
              $info->data_type="candidate";
              $info->error="Missing value";
              echo json_encode($info);
             }
        }
        else{
          $info->data_type="candidate";
          $info->error="Missing value";
          echo json_encode($info); 
        }
  }
  else{
    $info->data_type="candidate";
    $info->error="Missing value";
    echo json_encode($info); 
   }



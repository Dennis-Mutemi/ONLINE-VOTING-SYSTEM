<?php
    $arr_cand=array();
    $arr_cand["rank"]=null;    
    $update_que="UPDATE user_details SET RANK = :rank,T_VOTES = 0,VOTE_STATUS=0";
    $output=$obda->write($update_que,$arr_cand);      
    $info->data_type="dellc";
    echo json_encode($info);
    
         
  
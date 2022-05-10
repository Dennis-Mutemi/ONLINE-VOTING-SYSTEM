<?php
$time2=strtotime($conv_obj->end);
$time1=strtotime($conv_obj->start);
$current=time();
if(!empty($conv_obj->end) && !empty($conv_obj->start)){
    //insert time into the database
    if($time1>=$time2){
        $info->data_type="invalidtime";        
         echo(json_encode($info));
          
    }else{
        $ttime=array();
        $ttime["start"]=$conv_obj->start;
        $ttime["end"]=$conv_obj->end;
        $time_query="UPDATE set_time SET START=:start,END=:end WHERE ID=1";
        $resut=$obda->write($time_query,$ttime);
        if($resut){
            $info->data_type="successm";
            echo(json_encode($info));
        }
        
        
    }
       
  }
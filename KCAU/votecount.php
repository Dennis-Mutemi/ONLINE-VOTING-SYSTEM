<?php
$last=0;   
if($_SESSION['user_id']){
    $val=array();
    $val["key_userid"]=$_SESSION['user_id'];
    $vote_quru="SELECT 	* FROM user_details WHERE  USER_ID=:key_userid";
    $ress=$obda->read($vote_quru,$val);
    $ress=$ress[0];
    if($ress->VOTE_STATUS!=1){
        if(isset($conv_obj->total) && ($conv_obj->leng==$conv_obj->total)){
            if(isset($conv_obj->leng) && $conv_obj->leng!=0){                              
                for ($i=0; $i<$conv_obj->leng; $i++) {
                    $last=$last+1;
                    $valu=array();                
                    if(!empty($conv_obj->$i)){
                            $valu["keyy"]=$conv_obj->$i;
                            $vote_qury="SELECT * FROM user_details WHERE  USER_ID=:keyy";
                            $res=$obda->read($vote_qury,$valu);
                            if(is_array($res)){
                                $res=$res[0];        
                                $vot_total=$res->T_VOTES + 1;
                                $valu["key_val"]=$vot_total;
                                $vote_writ="UPDATE user_details SET T_VOTES = :key_val  WHERE USER_ID=:keyy";
                                $res=$obda->write($vote_writ,$valu);
                                $vote_wr="UPDATE user_details SET VOTE_STATUS = 1 WHERE USER_ID=:key_userid";
                                $res=$obda->write($vote_wr,$val);                                
                                if($last==$conv_obj->leng){
                                    $info->data_type="Voted";
                                    echo(json_encode($info));
                                    break;
                                        }                         
                                    }                   
                                    
                                }
                                           
                            }
                             
                                              
                
               
            }}
            else if(!isset($conv_obj->total) && $conv_obj->leng!=$conv_obj->total){
                        $info->data_type="default";
                        echo(json_encode($info));
                        die;
                        
                }
                else{
                    $info->data_type="selectone";
                    echo(json_encode($info));
                    die;
                }
            

      }
    else{        
        $info->data_type="Votestatus";
        echo(json_encode($info));
        
     }
}

   

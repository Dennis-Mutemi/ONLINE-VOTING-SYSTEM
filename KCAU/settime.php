<?php
  $current=time();
  $query_tm="SELECT * FROM set_time WHERE ID=1";
  $ress_v=$obda->read($query_tm,[]);
  if(is_array($ress_v)){
      $ress_v=$ress_v[0];
      $time2=strtotime($ress_v->END);
      $time1=strtotime($ress_v->START);      
      // $info->data_type="startvoting";
      // $info->datae=$time2;
      // $info->datas=$time1;
      // $info->datac=$current;      
      // echo(json_encode($info));
      // die();
      
  if(!empty($time2) && !empty($time1)){      
          $late=$current-$time2;
          $early=$current-$time1;           

        if($early>0 && $late<0){
            $time_que="UPDATE set_time SET VOTE_ALLOW=1 WHERE ID=1";
            $obda->write($time_que,[]);
            $info->data_type="startvoting";
            echo(json_encode($info));
        }
          elseif($late>0){
              $info->data_type="endvoting";
              $time_que1="UPDATE set_time SET VOTE_ALLOW=0 WHERE ID=1";
              $obda->write($time_que1,[]);
              $info->time_t=date("m-d-y g:ia",$time2);
              echo(json_encode($info));
          }
          elseif($early<0){
                $info->data_type="votingnot";
                $time_que2="UPDATE set_time SET VOTE_ALLOW=0 WHERE ID=1";
                $info->time_t=date("m-d-y g:ia",$time1);
                $obda->write($time_que2,[]);     
                echo(json_encode($info));
              }
        } 

  }

<?php
$userid= $_SESSION["user_id"];
$query="SELECT * FROM user_details WHERE USER_ID=$userid;";
$res=$obda->read($query,[]);
if(is_array($res)){     
           $res=$res[0];                
           $res->valu=ucfirst($res->NAME);
           $image=($res->GENDER=='Male')? 'man.png':'female.png';
           if($res->IMAGE!=""){
                 $image=$res->IMAGE;
           }
           $res->img=$image;
           $res->data_type="info";
           echo json_encode($res);

      }
     
     


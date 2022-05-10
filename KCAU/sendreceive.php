<?php
    $info->message1="";    
    $arr2['sender_id']=$_SESSION['user_id'];   
    if(isset($_SESSION['user_id']) && $conv_obj->data_type=="refresh"){                             
                $query_message="SELECT * FROM messages  WHERE RECEIVER=:sender_id && SENDER =:sender_id;";
                $meas=$obda->read($query_message,$arr2);
                if(is_array($meas)){                 
                    foreach ($meas as $value) {                                    
                    if($value->SENDER==$_SESSION['user_id']){            
                        $info->datatype="sender";                       
                        $info->message1.="
                        <div class='chat-message-right pb-4'>
											<div>
												<img src='img/avatars/avatar.jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>
												<div class='text-muted small text-nowrap mt-2'>2:33 am</div>
											</div>
											<div class='flex-shrink-1 bg-light rounded py-2 px-3 mr-3'>
												<div class='font-weight-bold mb-1'>You</div>
												$value->MESSAGE1
											</div>
										</div>                       
                        ";                       

                       }
                    else{
                        $info->datatype="receiver";
                        $info->message1.="<div class='chat-message-left pb-4'>
                        <div>
                            <img src='img/avatars/avatar-3.jpg' class='rounded-circle mr-1' alt='Kathie Burton' width='40' height='40'>
                            <div class='text-muted small text-nowrap mt-2'>2:34 am</div>
                        </div>
                        <div class='flex-shrink-1 bg-light rounded py-2 px-3 ml-3'>
                            <div class='font-weight-bold mb-1'>Kathie Burton</div>
                            $value->MESSAGE1
                        </div>
                    </div>";
                        
                       }
                    }                   
                    echo(json_encode($info));
                }
                die();
         
    }
    $current_user_id['userid']=$conv_obj->id;
    $query_insert="SELECT * FROM user_details  WHERE USER_ID=:userid LIMIT 1";
    $user_acc['username']=$_SESSION['user_id'];
    $query_in="SELECT * FROM user_details WHERE USER_ID=:username LIMIT 1";
    $res=$obda->read($query_insert,$current_user_id);
if(is_array($res)){
    $arr1['receiver_id']=$conv_obj->id;
    $arr1['date1']=date("Y-m-d H-i-s");
    $arr1['sender_id']=$_SESSION['user_id'];
    $arr1['massage_id']=mess_id(60);
    $arr1['massage']=$conv_obj->message; 
    $arr2['receiver_id']=$conv_obj->id;  
    $query_check="SELECT * FROM messages  WHERE  (RECEIVER=:receiver_id && SENDER =:sender_id)||(RECEIVER=:sender_id && SENDER =:receiver_id);";
    $check_me=$obda->read($query_check,$arr2);
    if(is_array($check_me)){
        $check_me=$check_me[0];
        $arr1['massage_id']=$check_me->MESSAGEID;     
    }
    $query_insert_me="INSERT INTO messages (MESSAGEID,SENDER,RECEIVER,MESSAGE1,DATE1) VALUES (:massage_id,:sender_id,:receiver_id,:massage,:date1);";
    $send_mess=$obda->write($query_insert_me,$arr1);
                    $res=$res[0];  
                    //    $image=($res->GENDER=="Male")? "man.png":"female.png";
                    //    if(file_exists($res->IMAGE)){
                    //         $image=$res->IMAGE;
                    //     };       
                    // $res->IMAGE=$image; 
                $arr_id['massages']= $arr1['massage_id'];              
                $query_message="SELECT * FROM messages  WHERE (RECEIVER=:receiver_id && SENDER =:sender_id) || (RECEIVER=:sender_id && SENDER =:receiver_id);";
                $meas=$obda->read($query_message,$arr2);
                if(is_array($meas)){                 
                    foreach ($meas as $value) {                                    
                    if($value->SENDER==$_SESSION['user_id']){            
                        $info->datatype="sender";                       
                        $info->message1.="
                        <div class='chat-message-right pb-4'>
											<div>
												<img src='img/avatars/avatar.jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>
												<div class='text-muted small text-nowrap mt-2'>2:33 am</div>
											</div>
											<div class='flex-shrink-1 bg-light rounded py-2 px-3 mr-3'>
												<div class='font-weight-bold mb-1'>You</div>
												$value->MESSAGE1
											</div>
										</div>                       
                        ";
                       

                       }
                    else{
                        $info->datatype="receiver";
                        $info->message1.="<div class='chat-message-left pb-4'>
                        <div>
                            <img src='img/avatars/avatar-3.jpg' class='rounded-circle mr-1' alt='Kathie Burton' width='40' height='40'>
                            <div class='text-muted small text-nowrap mt-2'>2:34 am</div>
                        </div>
                        <div class='flex-shrink-1 bg-light rounded py-2 px-3 ml-3'>
                            <div class='font-weight-bold mb-1'>Kathie Burton</div>
                            $value->MESSAGE1
                        </div>
                    </div>";
                        
                       }
                    }                   
                    echo(json_encode($info));
                }
                                  
               
}
function mess_id($max){
    $nu_r=array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','u','v','w','x','y','z','A','B');
    $ran='';
    $max=rand(4,$max);
    for ($i=0; $i<$max; $i++) {
        $atr=rand(0,36);
        $ran.=$nu_r[$atr];
    }
    return $ran;
}

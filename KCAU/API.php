<?php
date_default_timezone_set("Africa/Nairobi");
session_start();
$data=file_get_contents("php://input");
$conv_obj=JSON_decode($data);
require_once("autoload.php");
$obda=new database();
$info=(object)[];
if(!isset($_SESSION['user_id'])){
    if($conv_obj->data_type=="user_infor"){
          $info->logged_in=false;    
          echo json_encode($info);
          die;
       }
}
$rror="";
if(isset($conv_obj->data_type) && $conv_obj->data_type=="sign"){
    include_once("validate_userdata.php");
    }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="sign_in"){
        include_once("login_validate.php");
        }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="log_out"){
            include_once("logout.php");
            }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="reset_pass"){ 
        include_once("sendemail.php");
                }
                
if(isset($conv_obj->data_type) && $conv_obj->data_type=="userinf"){
     include_once("getuserinfo.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="users"){
        include_once("userval.php");
   }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="user"){
        include_once("delet.php");
   }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="update"){
        include_once("updatedisp.php");
   }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="search"){
        include_once("search.php");
   }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="cadd-disp"){
        include_once("candidatedis.php");
   }
   
if(isset($conv_obj->data_type) && $conv_obj->data_type=="user-disp"){
        include_once("votedisplay.php");
   }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="votedisp"){
        include_once("votecount.php");
   }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="live"){
        include_once("autolive.php");
   }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="profile"){
        include_once("settingmodel.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="user_image"){
        include_once("userinfo.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="settime"){
        include_once("savetime.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="votedis_time"){
        include_once("settime.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="deletall"){
        include_once("deletealld.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="updateuserdetail"){
        include_once("updateuse.php");
}

if(isset($conv_obj->data_type) && $conv_obj->data_type=="chadisp"){
        include_once("chatdisplay.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="userchats"){
        include_once("chatdissent.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="chatsend" || $conv_obj->data_type=="refresh"){
        include_once("sendreceive.php");
}
if(isset($conv_obj->data_type) && $conv_obj->data_type=="rankk"){
        include_once("randadd.php");
        }
if(isset($conv_obj->data_type) && $conv_obj->data_type=="rank_valu"){
        include_once("load_rank.php");
        }
       
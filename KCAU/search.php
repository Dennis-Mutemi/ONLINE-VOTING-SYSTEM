<?php
if($conv_obj->d_type=="addcad"){
$info->data_type="search";
$values="";
$email=stripslashes($conv_obj->value);
$serch_query="SELECT * FROM user_details WHERE EMAIL LIKE '%$email%'";
$output=$obda->read($serch_query,[]);
$info->search_value=$output;
echo json_encode($info);
  }
else{
    $info->data_type="searchchat";
    $values="";
    $email=stripslashes($conv_obj->svalue);
    $serch_query="SELECT * FROM user_details WHERE NAME LIKE '%$email%'";
    $output=$obda->read($serch_query,[]);
    $info->search_chat=$output;
    echo json_encode($info);
}





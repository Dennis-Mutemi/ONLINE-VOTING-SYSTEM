<?php
if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}
$info->data_type="falsee";
echo json_encode($info);

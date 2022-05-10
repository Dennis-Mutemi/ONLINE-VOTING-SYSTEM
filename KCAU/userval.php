<?php
if($conv_obj->d_type=="serch_user"){
    $re=stripslashes($conv_obj->value);
    $serch_query="SELECT * FROM user_details WHERE USERNAME LIKE '%$re%' OR  Email LIKE '%$re%' OR REG_NO LIKE '%$re%'";
    $output=$obda->read($serch_query,[]);
    $num=count($output);
    if(is_array($output)){
        $users=array();
        $values=(object)[];
        $values->val_data="";
        $users=$output;
        foreach ($users as $value) {
         $values->val_data.="<tr>
         <td>$value->NAME</td>
         <td>$value->REG_NO</td>
         <td>$value->COURSE</td>
         <td>$value->EMAIL</td>
         <td class='ms-5'> 
             <span><img src='img/avatars/del.png' onclick='delet(event)' userid=$value->USER_ID  class='img-fluid rounded-circle mb-2' alt='del' data-toggle='tooltip' data-placement='bottom' title='Delete' style='cursor:pointer'></span>
             <span><a href='edituser.php?edit=$value->USER_ID'><img src='img/avatars/set.png' width='20%' height='2%' onclick='update(event)'  class='img-fluid rounded-circle mb-2' alt='set' data-toggle='tooltip' data-placement='bottom' title='Settings' style='cursor:pointer'></a></span>
         </td> </tr>
         ";
        } 

        $values->val_data.="<tr>
        <a href='pages-sign-up.php' class='btn btn-secondary p-2'>Add New User</a>
       </tr>";          
        $values->data_type="users";
        $values->users=$num;
        echo json_encode($values);
    }  
    else{
        $users=array();
        $values=(object)[];      
        $values->val_data="
        <tr style='margin-left:4em'>
         NO RESULTS FOUND
        </tr>
        <tr>
        <a href='pages-sign-up.php' class='btn btn-secondary p-2'>Add New User</a>
       </tr>";          
        $values->data_type="users";         
        echo json_encode($values);
    }
}else{
    $query="SELECT * FROM user_details LIMIT 7";
    $query1="SELECT * FROM user_details";
    $res1=$obda->read($query1,[]);
    $res=$obda->read($query,[]);    
    $num=count($res1);
    if(is_array($res)){
               $users=array();
               $values=(object)[];
               $values->val_data="";
               $users=$res;
               foreach ($users as $value) {
                $values->val_data.="<tr>
                <td>$value->NAME</td>
                <td>$value->REG_NO</td>
                <td>$value->COURSE</td>
                <td>$value->EMAIL</td>
                <td class='ms-5'> 
                    <span><img src='img/avatars/del.png' onclick='delet(event)' userid=$value->USER_ID  class='img-fluid rounded-circle mb-2' alt='del' data-toggle='tooltip' data-placement='bottom' title='Delete' style='cursor:pointer'></span>
                    <span><a href='edituser.php?edit=$value->USER_ID'><img src='img/avatars/set.png' width='20%' height='2%' onclick='update(event)'  class='img-fluid rounded-circle mb-2' alt='set' data-toggle='tooltip' data-placement='bottom' title='Settings' style='cursor:pointer'></a></span>
                </td> </tr>
                ";
               } 
    
               $values->val_data.="<tr>
               <a href='pages-sign-up.php' class='btn btn-secondary p-2'>Add New User</a>
              </tr>"; 
               $values->users=$num;  
               $values->data_type="users";
               echo json_encode($values);
}
}

    
          
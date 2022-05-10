<?php
$quey_display_candidate="SELECT * FROM user_details WHERE RANK IS NOT NULL";
$candidate_res=$obda->read($quey_display_candidate,[]);
if(is_array($candidate_res)){
    $users=array();
    $values=(object)[];
    $values->val_data="";
    $users=$candidate_res;
    foreach ($users as $value) {
     $values->val_data.="<tr>
     <td>$value->NAME</td>
     <td>$value->REG_NO</td>
     <td>$value->SCHOOL</td>
     <td>$value->RANK</td>
     <td class='ms-5'> 
         <span><img src='img/avatars/del.png' onclick='deletec(event)' userid=$value->USER_ID class='img-fluid rounded-circle mb-2' alt='del' data-toggle='tooltip' data-placement='bottom' title='Delete' style='cursor:pointer'></span>
         <span><a href='edituser.php?edit=$value->USER_ID'><img src='img/avatars/set.png' width='12%' height='2%' user_ class='img-fluid rounded-circle mb-2' alt='set' data-toggle='tooltip' data-placement='bottom' title='Settings' style='cursor:pointer'></a></span>
     </td> </tr>
     ";
    };
    $values->val_data.='<p onclick="delete_all()" style="cursor:pointer;background: hotpink;padding: 0.3em;color:black; width:55%" ;margin:1em>Delete All</p>';    
    $values->data_type="cand_displ";
    echo json_encode($values);

} 
else{
    $values=(object)[];
    $values->data_type="error";
    $values->no_available="No Available Candidate";
    echo json_encode($values); 
}
                                                
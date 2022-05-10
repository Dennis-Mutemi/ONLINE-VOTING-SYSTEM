<?php
if(isset($_SESSION['user_id'])){
$id_cad=$_SESSION['user_id'];
$query_ec="SELECT SCHOOL FROM user_details WHERE USER_ID=$id_cad";
$user_vote=$obda->read($query_ec,[]);
$result=$user_vote[0];
$scholl=$result->SCHOOL;
$query_for_school="SELECT * FROM user_details WHERE (RANK IS NOT NULL) && (SCHOOL='$scholl')";
$user_school=$obda->read($query_for_school,[]);
if(is_array($user_school)){
    $users=array();
    $rem_dup=array();  
    $info->value1="";
    $users=$user_school;
    $k=0;
    foreach ($users as $value){        
        $rem_dup[$k]=$value->RANK;
        $k=$k+1;
        }
        $arry_wi=array_unique($rem_dup);
        $new_arr=array_values($arry_wi);
        $len=count($new_arr);
        for ($i=0; $i < $len ; $i++) {
            $rank_c=$new_arr[$i];
            $query_for_schoo="SELECT * FROM user_details WHERE RANK ='$rank_c' &&  SCHOOL='$scholl' ORDER BY T_VOTES DESC;";
            $user_schoo=$obda->read($query_for_schoo,[]); 
            $info->value1.="
                        <thead>
                        <tr>                            
                            <th Colspan='4'><div class='my-3 text-center bg-warning p-2 w-100' style='width:1000px;'>$rank_c</div></th>
                        </tr>                            
                    </thead>
           
           ";
            $users2=array();
            $users2=$user_schoo;
            foreach ($users2 as $value){        
                $info->value1.="
                <tbody class='table-hover'>
                <tr>
                <td>$value->NAME</td>
                <td>$value->RANK</td>
                <td>$value->T_VOTES</td>  
                <tr>                                                                  
                </tbody>";
                }
          
        }
    }    
   $info->data_type="liveresul";
   echo(json_encode($info));

} 


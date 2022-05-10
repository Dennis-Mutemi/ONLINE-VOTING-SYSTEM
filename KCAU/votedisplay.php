<?php
$query_tm="SELECT * FROM set_time WHERE ID=1";
$ress_v=$obda->read($query_tm,[]);
if(is_array($ress_v)){
    $ress_v=$ress_v[0];
    if($ress_v->VOTE_ALLOW==1){
        if(isset($_SESSION['user_id'])){
            $id_cad=$_SESSION['user_id'];
            $query_ec="SELECT * FROM user_details WHERE USER_ID=$id_cad";
            $user_vote=$obda->read($query_ec,[]);
            $result=$user_vote[0];
            $scholl=$result->SCHOOL;
            $vstatus=$result->VOTE_STATUS;          
            if($vstatus!=1){
            $query_for_school="SELECT * FROM user_details WHERE (RANK IS NOT NULL) && (SCHOOL='$scholl');";
            $user_school=$obda->read($query_for_school,[]);
                if(is_array($user_school) && !empty($user_school)){
                    $users=array();
                    $rem_dup=array();   
                    $info->valuee="";
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
                        $query_for_schoo="SELECT * FROM user_details WHERE RANK ='$rank_c' &&  SCHOOL='$scholl'";
                        $user_schoo=$obda->read($query_for_schoo,[]); 
                        $info->valuee.="
                                <thead>
                                    <tr>                          
                                    <th Colspan='4'><div class='my-3 text-center bg-warning p-2 w-100' style='width:1000px;'>$rank_c</div></th>
                                    </tr>
                                    <tr>
                                    <th>NAME</th>
                                    <th>REG.NO</th>
                                    <th>RANK</th>
                                    <th>VOTE</th>
                                    </tr>                          
                                </thead>
                        
                        ";
                        $users2=array();
                        $users2=$user_schoo;
                        foreach ($users2 as $value){        
                            $info->valuee.="
                            <tbody class='table-hover'>
                            <tr>
                            <td>$value->NAME</td>              
                            <td>$value->REG_NO</td> 
                            <td>$value->RANK</td>
                            <form>    
                            <td class='ms-5'> 
                                <input type='radio' name='$value->RANK' value='$value->USER_ID' required>                    
                            </td> 
                            <tr>                                                                  
                            </tbody>";
                            }
                        
                    }
                    $info->valuee.="
                    <tr><th Colspan='4' class='text-center'  id='votval'><input type='submit' class='btn btn-info' value='SubMit'  toat='$len' onclick='send_vote(event)'></th></tr>
                    </form> "; 
                    $info->data_type="uservote";
                    echo(json_encode($info));
                } 
                else{
                    $info->data_type="nocandidate";
                    echo(json_encode($info)); 
                }   
             
            
                   }   
            else{
                $info->data_type="Votestatus";
                echo(json_encode($info));
                
            }}
    }
}


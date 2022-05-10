<?php
$serch_query="SELECT  LEVEL  FROM rank;";
$output=$obda->read($serch_query,[]);
$rank_v = array();
if(is_array($output)){ 
      $i=0;  
        foreach($output as $value) {
            $rank_v[$i]=$value->LEVEL;
            $i++;
                }         
       
    
}
$info->search_value=$rank_v;
$info->data_type="rank_displ";
echo json_encode($info);
// {"search_value":[{"LEVEL":"jjjjjd"},{"LEVEL":"gggg"},
// {"LEVEL":"fkflkllk"},{"LEVEL":"pre"},{"LEVEL":"pre"},
// {"LEVEL":"ttt"},{"LEVEL":"claudia"},{"LEVEL":"iooop"},
// {"LEVEL":"iii"},{"LEVEL":"president"},{"LEVEL":"president"}],"data_type":"rank_displ"}
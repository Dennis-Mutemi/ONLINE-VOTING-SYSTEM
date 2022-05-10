<?php
          $infor=(object)[];
          $data_values=array();
          $data_values["password"]=$conv_obj->password1;        
          // {"name":"","username":"","email":"denismutemi@gmail.com","password":"","confirmpass":"",
          // "reg":"18/04189","schl":"","gender":"Male","course":"","data_type":"sign"}

          $data_values["username"]=$conv_obj->username1;   
          if(empty($conv_obj->username1)){
               $rror.="Please enter a valid username.<br>";
               
          }
          else{
               if(!preg_match("/^[a-z]*$/" , $conv_obj->username1)){              
               $rror.="username should only have lowercase letters<br>";
               
               }
          }
          $data_values["name"]=$conv_obj->name1;
          if(!preg_match("/^[a-zA-Z a-zA-Z ]*$/" , $conv_obj->name1)){
                  $rror.="Please enter a valid name.<br>"; 
              }
              else{
                  if(empty($conv_obj->name1)){
                    $rror.="Please enter your name.<br>";
                  }
              }
          $data_values["email"]=$conv_obj->email1;
          if(empty($conv_obj->email1)){
          $rror.= "Please enter email address.<br>";

                }        
             
        if(empty($conv_obj->password1)){
            $rror.="Please enter a valid password.<br>";
        }
       

          $data_values["gender"]=$conv_obj->gender1;
          if(empty($conv_obj->gender1)){
               $rror.="Please select your gender.<br>";
               
          }
          
          if(empty($conv_obj->course1)){
                $rror.="Please select your course.<br>";
                 
            }
        $data_values["reg"]=$conv_obj->reg1;
        if(empty($conv_obj->reg1)){
                $rror.="Please enter a valid username.<br>";
                
           }
           else{
                if(!preg_match("/^[1-9]+\/+[0-9]+/", $conv_obj->reg1)){
                      $rror.="Enter a valid registration number please<br>";
                
                }
           }

           $education=[
               "1"=>"Bachelor of Arts Counselling Psychology",
               "2"=>"Bachelor of Arts in Criminology",
               "3"=>"Bachelor of Arts in Film Technology and Performing Arts",
               "4"=> "Bachelor of Arts in Journalism and Digital Media",
               "5"=>"Bachelor of Education Arts",
               "6"=>"Bachelor of Education Early Childhood Education",
               "7"=>"Bachelor of Science in Actuarial Science",
               "8"=>"Bachelor of Science in Gaming and Animation Technology"
           ];
         $technology=[
               "1"=>"Bachelor of Business Information Technology",
               "2"=>"Bachelor of Science in Applied Computing",
               "3"=>"Bachelor of Science in Information and Communications Technology",
               "4"=>"Bachelor of Science in Information Security and Forensics",
               "5"=>"Bachelor of Science in Information Technology",
               "6"=>"Bachelor of Science in Software Development"
         ];
          $business=[
               "1"=>"Bachelor of Arts in Economics and Business Studies",
               "2"=>"Bachelor of Commerce",
               "3"=>"Bachelor of International Business Management",
               "4"=>"Bachelor of Procurement and Logistics",
               "5"=>"Bachelor of Public Management",
               "6"=>"Bachelor of Science in Economics & Statistics"
          ];
          $course=$conv_obj->course1;          
          $data_values["course"]=$conv_obj->course1;
          $data_values["school"]=$conv_obj->schl1;
          if(empty($conv_obj->schl1)){
               $rror.="Please Select Your School/Faculty.<br>";
               
          }
        if($conv_obj->schl1=="School of Education"){
          $last=count($education);
          $st=(string)$last;
             foreach($education as $x => $x_value) {
                  if($x_value==$course){
                       break;
                  }elseif($x==$st) {
                       $rror.="Select your correct school or course.<br>";
                  }                 
                  
                }}
          if($conv_obj->schl1=="School of Business"){
          $last=count($business);
          $st=(string)$last;
          foreach($business as $x => $x_value) {
               if($x_value==$course){
                    break;
               }elseif($x==$st) {
                    $rror.="Select your correct school or course.<br>";
               }                 
               
               }          
              
         }
         if($conv_obj->schl1=="School of Technology"){
          $last=count($technology);
          $st=(string)$last;
          foreach($technology as $x =>$x_value){
               if($x_value==$course){
                    break;
               }elseif($x==$st){
                    $rror.="Please elect your correct school or course.<br>";
                    }                 
               
               }
           
              
         }
        $useid=$conv_obj->userid;
          if($rror==""){   
               $query_inser="UPDATE user_details SET USERNAME=:username,EMAIL=:email,
               PASSWORD=:password,GENDER=:gender,
               SCHOOL=:school,REG_NO=:reg,
               NAME=:name,COURSE=:course
               WHERE USER_ID=$useid;";
               $res=$obda->write($query_inser,$data_values);               
                    if($res){     
                         $infor->mess="Updated successifully";
                         $infor->data_type="error1";
                         echo json_encode($infor);
                         
                    }
                         else{
                              
                              $infor->mess="Filed to update,Try Again";
                              $infor->data_type="error1"; 
                              echo json_encode($infor);
                         
                         }
               }
          else{
               $infor->mess=$rror;
               $infor->data_type="error1";
               echo json_encode($infor);                    
               }
         
<?php
          $infor=(object)[];
          $data_values=false;
          $use_id=$obda->generate_userid(10);
          $data_values["userid"]=$use_id;
          $data_values["time"]=date("Y-m-d H:i:s");    
          $data_values["password"]=$conv_obj->password;
          $pass=$conv_obj->confirmpass;
          // {"name":"","username":"","email":"denismutemi@gmail.com","password":"","confirmpass":"",
          // "reg":"18/04189","schl":"","gender":"Male","course":"","data_type":"sign"}

          $data_values["username"]=$conv_obj->username;   
          if(empty($conv_obj->username)){
               $rror.="Please enter a valid username.<br>";
               
          }
          else{
               if(!preg_match("/^[a-z]*$/" , $conv_obj->username)){              
               $rror.="username should only have lowercase letters<br>";
               
               }
          }
          $data_values["name"]=$conv_obj->name;
          if(!preg_match("/^[a-zA-Z a-zA-Z ]*$/" , $conv_obj->name)){
                  $rror.="Please enter a valid name.<br>"; 
              }
              else{
                  if(empty($conv_obj->name)){
                    $rror.="Please enter your name.<br>";
                  }
              }
          $data_values["email"]=$conv_obj->email;
          if(empty($conv_obj->email)){
          $rror.= "Please enter email address.<br>";

                }
          $data_values["password"]=$conv_obj->password;
          if($conv_obj->password!=$pass){
                   $rror.= "Password missmatch.<br>";
          
          }
          else{
               if(empty($pass) || empty($conv_obj->password)){
                    $rror.="Please enter a valid password.<br>";
                }
          }

          $data_values["gender"]=$conv_obj->gender;
          if(empty($conv_obj->gender)){
               $rror.="Please select your gender.<br>";
               
          }
          $data_values["cours"]=$conv_obj->course;
          $course=$conv_obj->course;
          if(empty($conv_obj->course)){
                $rror.="Please select your course.<br>";
                 
            }
        $data_values["reg"]=$conv_obj->reg;
        if(empty($conv_obj->reg)){
                $rror.="Please enter a valid username.<br>";
                
           }
           else{
                if(!preg_match("/^[1-9]+\/+[0-9]+/", $conv_obj->reg)){
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
        
          $data_values["school"]=$conv_obj->schl;
          if(empty($conv_obj->schl)){
               $rror.="Please Select Your School/Faculty.<br>";
               
          }
        if($conv_obj->schl=="School of Education"){
          $last=count($education);
          $st=(string)$last;
             foreach($education as $x => $x_value) {
                  if($x_value==$course){
                       break;
                  }elseif($x==$st) {
                       $rror.="Select your correct school or course.<br>";
                  }                 
                  
                }}
          if($conv_obj->schl=="School of Business"){
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
         if($conv_obj->schl=="School of Technology"){
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

          if($rror==""){   
               $query_insert="INSERT INTO user_details(USERNAME,EMAIL,TIME_CREATED,PASSWORD,GENDER,USER_ID,SCHOOL,REG_NO,NAME,COURSE)VALUES(:username,:email,:time,:password,:gender,:userid,:school,:reg,:name,:cours)";
               $res=$obda->write($query_insert,$data_values);
                    if($res){     
                         $infor->mess=$conv_obj->reg;
                         $infor->data_type="info";
                         echo json_encode($infor);
                         
                    }
                         else{
                              
                              $infor->mess="Account NOT created successifully kindly try again";
                              $infor->data_type="error"; 
                              echo json_encode($infor);
                         
                         }
               }
          else{
               $infor->mess=$rror;
               $infor->data_type="error";
               echo json_encode($infor);                    
               }
         
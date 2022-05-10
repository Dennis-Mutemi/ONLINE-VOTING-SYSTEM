function _(elemen){
    return document.getElementById(elemen);
      }
// function for sending and receiving data
loa_rank();
senddata({},"user_infor");
function senddata(data,type){
    let ajax = new XMLHttpRequest()
    ajax.onload=function(){
        if(ajax.status==200||ajax.readystate==4){
            hundle_results(ajax.responseText);
         }
    }
    data.data_type=type;
    let dat_string=JSON.stringify(data);
    ajax.open("post","API.php",true);
    ajax.send(dat_string);
}
function coll(){
    window.location="pages-clients.php"; 
}
let dbval=null;
function hundle_results(res){
    // alert(res);
    if(res!=""){                                 
        let obj=JSON.parse(res);        
        if(typeof(obj.logged_in!="undefined") && obj.logged_in==false){      
                    window.location="pages-sign-in.php";
                    }           
            else{                
                 switch(obj.data_type){
                    case "search":
                    let names=[];                    
                    let serch_res="";
                    for (let index = 0; index < obj.search_value.length; index++) {
                        names[index]=obj.search_value[index].NAME;                        
                        serch_res += `<div  class="js-dbsaveval" onclick="get_value(event)" userid_val="${names[index]}" userid_ident="${obj.search_value[index].USER_ID}" style="cursor:pointer;">${names[index]}</div>`;                          
                         }

                        let dip=_("js_displayval");                        
                         dip.innerHTML=serch_res;                   
                         break;                                  
                     case "falsee":                                                
                        window.location="pages-sign-in.php";
                        break; 
                     case "info":                        
                        _("user_name").innerHTML=obj.valu; 
                        _("js_user_name").innerHTML=`Hello, ${obj.valu}`;
                        _("left").innerHTML=`<img src="${obj.img}" class="img-fluid rounded-circle mb-2" alt="KCAU">`
                        break;
                    case "users":                        
                        _("total").innerHTML=`${obj.users} Users`;
                       _("js-userval").innerHTML=obj.val_data;
                       break;
                    case "del":                      
                        users();                        
                        break;  
                    case "candidate": 
                         if(obj.error!=""){
                    _("erro_call").innerHTML=`
                                       <div class="alert alert-danger d-flex align-items-center" role="alert" id="p_display">
										<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
										<div>
											${obj.error}
										</div>
                                    </div>`;                      
                         }
                         else{
                             _("erro_call").innerHTML=`
                                  <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div>
                                         ${obj. success}
                                    </div>
                                    </div>`;
                         }
                         
                        display_candidates();
                         break;
                    case "cand_displ":
                        _("tableheade").innerHTML=`
                        <tr>
                        <th>Name</th>
                        <th>REG.NO</th>
                        <th>School</th>												
                        <th>Rank</th>
                        <th>Setting</th>
                       </tr>`;                                        
                        _("js-userva").innerHTML=obj.val_data;
                        _("no_candidat").innerHTML="";
                        _("disabble").style.display="block";
                        break;
                    case "error":                                          
                        _("no_candidat").innerHTML=`<div style="background: red;color:white;">${obj.no_available}</div>`;
                        _("js-userva").innerHTML="";
                        _("disabble").style.display="none"; 
                        _("tableheade").innerHTML="";                  
                                   
                        break;
                    case "dellc":                        
                        display_candidates();
                        break;
                    case "uservote":                        
                       _("datatables").innerHTML=obj.valuee;
                        break;
                    case "nocandidate":
                        _("vstatus").innerHTML="Waiting for voting to  start";
                        _("datatables").innerHTML=`<div style="background:#aa">There are no available delegates</d>`;                        
                        break;
                    case "Votestatus":                       
                        _("vstatus").innerHTML="You have Already casted Your Vote";
                        _("datatables").innerHTML=`<div style="background:red">ThankYou For Voting</d>`;
                        _("toast").innerHTML="";
                        break;
                    case "Voted":                                                                
                         _("vstatus").innerHTML="You have Already casted Your Vote";
                         _("datatables").innerHTML=`<div style="background:red">ThankYou For Voting</d>`;
                         _("toast").innerHTML="";
                         break;
                    case "default":
                        _("toast").innerHTML="";
                        break;
                    case "selectone":
                        _("toast").innerHTML=`<div style="padding:2em" class="alert alert-danger alert-dismissible fade show" role="alert">
                                   <strong>Error!</strong> You should check in on some of those fields below.
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>`;                      
                                 window.setTimeout(function() {
                                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                                        $(this).remove(); 
                                    });
                                }, 4000);
                        break;
                    case "liveresul":                                             
                        _("datata").innerHTML=obj.value1;
                        break;
                    case "user_profile":                                       
                        _("Name").value=obj.profile_valu.name;
                        _("Email").value=obj.profile_valu.email;
                        _("Number").value=obj.profile_valu.reg;
                        _("Course").value=obj.profile_valu.course;
                        _("School").value=obj.profile_valu.school;
                        _("Gender").value=obj.profile_valu.gender;
                        _("setting").innerHTML=`<img src="${obj.profile_valu.img}" alt="KCAU">`;
                        
                        break;                                         
                    case "searchchat":                      
                                        
                             break;
                    case "invalidtime":
                    _("diff").innerHTML=`<div class="alert alert-warning alert-dismissible fade show p-3"
                        role="alert">
                        <strong>Warning!</strong>Invalid time set
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
                        break;
                    case "successm":
                        _("diff").innerHTML=`<div class="alert alert-warning alert-dismissible fade show p-3"
                        role="alert">
                        <strong>Ok!</strong>Saved successifully,click close to exit
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
                        break;
                    case "startvoting":                                        
                        user_vote();
                        _("vstatus").innerHTML="Voting in progress........";                                              
                        break;
                    case "endvoting":
                        _("vstatus").innerHTML=`<div>Voting ended on ${obj.time_t}</div>`;                     
                        user_vote();
                        break;
                    case "votingnot":
                        _("vstatus").innerHTML=`<div>Voting will be starting in ${obj.time_t}</div>`;                    
                        user_vote(); 
                        break;                   
                    case "user-edit":
                        alert(obj.upd_res);                                   
                        break;
                    case "error1":
                        let val=_("val");     
                        val.innerHTML=obj.mess;
                        val.style.display="block";         
                        break;
                    // case "userschat":                                               
                    //     _("search_user").innerHTML=obj.val_data;
                    //     break;
                    // case "chatdsp":
                    //     alert("melody");
                    //     _("toname").innerHTML=`TO: ${obj.valu}`;
                    //     _("search_user").innerHTML=`NOW CHATTING WITH<BR> ${obj.valu}`;
                    //     break;
                        
                        
                      
                   } 
                }
 
                    }
                
}

display_candidates();
//display the add-candidate pop up on click
let add_optn=_("js_display");
function deletec(e){
    let con=confirm("Are You Sure You Want To delete the selected candidate");
    if(con){ 
        let userid=e.target.getAttribute('userid');            
        senddata({"idd":userid},"user");
       
    } 
}
display_userinfo();
//logout prompt
function logout(){
    let con=confirm("Are You Sure You Want To Log out");
    if(con){
        senddata({},"log_out");
    }
}
_("log_out").addEventListener("click",logout);
//DISPLAY USER INFORMATION
function display_userinfo(){
    senddata({},"userinf");
}
display_userinfo();
users();
function users(){
    senddata({"d_type":"user"},"users");
}
function delet(e){    
    let con=confirm("Are You Sure You Want To delete the selected user");
    if(con){ 
        let userid=e.target.getAttribute('userid');       
        senddata({"id":userid},"user");
       
    }   

}
profileinfo();
function profileinfo(){
    senddata({},"profile");
}

function get_value(e){
    let valuee=e.target.getAttribute('userid_val');
    let user_ident=e.target.getAttribute('userid_ident');
    _("js_val").value=valuee;
    _("js_userid").value=user_ident;
    
}
function updat(e){    
        let userid=e.target.getAttribute('user_id');       
        senddata({"id":userid},"update");
       }

//live search
function search(text){   
    senddata({"value":text,"d_type":"addcad"},"search");
}
//serch user live
function search_user(text){   
    senddata({"value":text,"d_type":"serch_user"},"users");
}


// send the selected candidate name
let candidate={};
function send_datac(){       
     candidate.name=_("js_val").value;
     candidate.user_idd=_("js_userid").value;
     candidate.level=_("colFormLabelSm").value;
     senddata(candidate,"user"); 

    }
function display_candidates(){
    senddata({},"cadd-disp");

}

function user_vote(){
    senddata({},"user-disp");
}

function send_votee(){
    senddata({},"votedisp");
}
send_votee();

function send_vote(e){
    let key=0;
    let elements=document.getElementsByTagName("INPUT");
    let valu={};      
    for (let index = 0; index < elements.length; index++) {        
        if(elements[index].checked){            
            valu[key] = elements[index].value;
            key=key+1;
                    }                                
    
    }
    let len=Object.keys(valu).length;
    valu.leng=len;
    valu.total=e.target.getAttribute('toat');
    senddata(valu,"votedisp");
    
}


//display results
function liveresult(){
    senddata({},"live");
   }
function auto_load(){
    senddata({},"votedis_time")
}
auto_load();
liveresult();
setInterval(() => {
    liveresult();
    auto_load();    

}, 5000);

send_vote(e);
//upload image
function upload_progile_image(files){        
    let myfile=new FormData();        
    let ajax = new XMLHttpRequest();
    ajax.onload=function(){
        if(ajax.status==200||ajax.readystate==4){     // alert(ajax.responseText);
            display_userinfo();
            senddata({},"profile");            
            
         }
    }
    myfile.append("data_type","user_image");
    myfile.append("user_profile_image",files[0]);
    ajax.open("post","uploads.php",true);
    ajax.send(myfile);
 
}

// CHAT PAGE
    //SEARCH OPTION
function search_rec(name){
    senddata({"svalue":name,"d_type":"chat"},"search");
}
function userch(){					
    senddata({},"chadisp");
}
userch();
function userchaid(e){    
    let userid=e.target.getAttribute('userid');					
    senddata({"userchatid":userid},"userchats");  
            
} 

//SET TIMES

function set_time(){
    let t=document.getElementsByTagName("input");
    let dat={};    
    for (let index = 0; index < t.length; index++){
    let element = t[index].name;
    switch (element) {
        case "start":
            dat.start= t[index].value;       
            break;				
        case "end":
            dat.end= t[index].value;       
            break;
               
          }
}
senddata(dat,"settime");
}

//delete all delegates
function delete_all(){
    let k=confirm("Are You sure you want to delete all delegates?");
    if(k){
        senddata({},"deletall");
    }
    
}
//update user details
function update_user(){
    let elem=_("main");
    let elements=elem.getElementsByTagName("INPUT");
    let dat={}
    for (let index = 0; index < elements.length; index++) {
    let element = elements[index].name;
    switch (element) {
        case "name":
            dat.name1= elements[index].value;       
            break;				
        case "registration":
            dat.reg1= elements[index].value;       
            break;
        case "username":
            dat.username1= elements[index].value;       
            break;
        case "email":
            dat.email1= elements[index].value;       
            break;           
        case "password":
            dat.password1= elements[index].value;       
            break;
        case "useriddd":
            dat.userid=elements[index].value;       
            break;  
                         
          }
}
                
    let schl=_("school");
    dat.schl1=schl.value;                         
    let select=_('genderr');
    dat.gender1=select.value;
    text=dat.schl;									
    let course1=_("course");		
    dat.course1=course.value;		   
    senddata(dat,"updateuserdetail");
    
}

function collectdata(){
    let elem=_("main");
    let elements=elem.getElementsByTagName("INPUT");
    let data={}
    for (let index = 0; index < elements.length; index++) {
    let element = elements[index].name;
    switch (element) {
        case "name":
            data.name= elements[index].value;       
            break;				
        case "registration":
            data.reg= elements[index].value;       
            break;
        case "username":
            data.username= elements[index].value;       
            break;
        case "email":
            data.email= elements[index].value;       
            break;           
        case "password":
            data.password= elements[index].value;       
            break;
        case "retypepassword":
            data.confirmpass= elements[index].value;       
            break;        
          }
}
                
    let schl=_("school");
    data.schl=schl.value;                         
    let select=_('genderr');
    data.gender=select.value;
    text=data.schl;									
    let course1=_("course");		
    data.course=course1.value;									   
    senddat(data,"sign");
} 

function set_rank(){
    let daval={};    
    let elements=_("rankvalue").value;
    daval.rankval=elements;
    let spec=_("speci");
    daval.specific=spec.value;
    senddat(daval,"rankk");

}
function loa_rank(){
    senddat({},"rank_valu");
    
}

function senddat(data,type){
    let ajax = new XMLHttpRequest()
    ajax.onload=function(){
        if(ajax.status==200||ajax.readystate==4){
            disp(ajax.responseText);
         }
    }
    data.data_type=type;
    let dat_string=JSON.stringify(data);
    ajax.open("post","API.php",true);
    ajax.send(dat_string);
}    
function disp(result){
// alert(result);
let val=_("val");
let obj=JSON.parse(result);
switch(obj.data_type){
    case "info":
        window.location="pages-clients.php";
        break;
    case "rankinfo":        
       _("rapop").innerHTML=`<div style="padding:2em" class="alert alert-primary alert-dismissible fade show" role="alert">
       <strong>Rank added successifully,click close to Exit</strong>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>`;
        break;
    case "error":
        val.innerHTML=obj.mess;
        val.style.display="block";
        _('scroled').scrollTo(_('scroled').scrollHeight,0);
        break;
    case "error1":
        _("rapop").innerHTML=`<div style="padding:2em" class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>${obj.mess}</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
        </div>`;
        break;
    case "rank_displ":
        var mark="";        
        for (let i = 0; i< obj.search_value.length;i++){            
            mark += `<option value="${obj.search_value[i]}">${obj.search_value[i]}</option>`;
          }         
          _("colFormLabelSm").innerHTML=mark;
        }
}


    
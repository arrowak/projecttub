/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function loggedIn(){
    $("#logout").fadeIn(500);
            $("#loginWrapper").fadeOut(500);
            $("#registerWrapper").fadeOut(500);
            $("#tubiconWrapper").fadeOut(500);
            $.post("uploadproject.php",
            function(data){
                  $("#registerWrapper").html(data);
                  $("#registerWrapper").css("display","block");
                  $("#registerWrapper").hide();
                  $("#registerWrapper").fadeIn(800);
                  return false;
            });
}

$(document).ready(function(){

   $("#register").click(function(){
       var txtname = $("#name").val();
       var txtemailid = $("#email").val();
       var txtpassword = $("#password").val();
       var txtcollege = $("#college").val();
       var txtcourse = $("#course").val();
       var txtyear = $("#yearofjoining").val();
       $.post("registeruser.php",{txtname:txtname,txtemailid:txtemailid,txtpassword:txtpassword,txtcollege:txtcollege,txtcourse:txtcourse,txtyear:txtyear},
       function(data){
           $("#alert").html(data);
           $("#alert").css("display","block");
           $("#alert").hide();
           $("#alert").fadeIn(800);
           
       });
       
      return false;
   });

   $("#login").click(function(){
       
       var txtemailid = $("#loginemail").val();
       var txtpassword = $("#loginpassword").val();
      
       $.post("loginuser.php",{txtemailid:txtemailid,txtpassword:txtpassword},
       function(data){
          if(data == "1"){
            window.location = "uploadproject.php";
           }
           else
               {
            $("#alertlogin").html("<strong>Oops! </strong>Username or password is not right. Try again.");
            $("#alertlogin").css("display","block");
            $("#alerlogint").hide();
            $("#alertlogin").fadeIn(800);
               }
       });
        return false;
   });


   $("#logout").click(function(){
        $.post("logoutuser.php");
        window.location.replace("http://localhost/projecttub");

   });
   
   $("#uploadproject").click(function(){
     
       var fname = $("#projectfile").val();
       var projectname = $("#name").val();
       var snap1 = $("#snapshot1").val();
       var ext = fname.substring(fname.lastIndexOf('.', fname.length)+1,fname.length);
       if(projectname == "")
       {
           $("#alertproject").attr("class","alert alert-danger");
           $("#alertproject").html("<strong>Invalid Project Name!</strong> &nbsp;&nbsp;Please give your project a name.");
           $("#alertproject").css("display","block");
           $("#alertproject").hide();
           $("#alertproject").fadeIn(800);
          
       }
       else if(ext != "zip"){
           $("#alertproject").attr("class","alert alert-danger");
           $("#alertproject").html("<strong>Invalid Project File!</strong> &nbsp;&nbsp;Please upload only .zip file.");
           $("#alertproject").css("display","block");
           $("#alertproject").hide();
           $("#alertproject").fadeIn(800);
          // $("#projectfile").attr('class','alert alert-danger');
       }
       else if(snap1 == ""){
                 $("#alertproject").attr("class","alert alert-danger");
                 $("#alertproject").html("<strong>Invalid Snapshot File!</strong> &nbsp;&nbsp;Please upload atleast one snapshot.");
                $("#alertproject").css("display","block");
                $("#alertproject").hide();
                $("#alertproject").fadeIn(800);               
           }
      else{
                $("#alertproject").attr("class","alert alert-success");
                $("#alertproject").html("<strong> Thank You! </strong> &nbsp;&nbsp; Your project is being uploaded. Please wait...");
                $("#alertproject").css("display","block");
                $("#alertproject").hide();
                $("#alertproject").fadeIn(800);
                $("#loader").css("display","block").fadeIn(800);
          // $("#projectfile").attr('class','');
      }
       
       return false;
   });
});

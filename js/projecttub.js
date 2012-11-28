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
       var ext = fname.substring(fname.lastIndexOf('.', fname.length)+1,fname.length);
       if(ext != "zip"){
           $("#alertproject").html("<strong>Invalid Project File!</strong>  Please upload only .zip file.");
           $("#alertproject").css("display","block");
           $("#alertproject").hide();
           $("#alertproject").fadeIn(800);
           $("#projectfile").attr('class','alert alert-danger');
       }
       else{          
           $("#alertproject").html("A Valid Project File.");
           $("#alertproject").css("display","block");
           $("#alertproject").hide();
           $("#alertproject").fadeIn(800);
           $("#projectfile").attr('class','');
       }
       return false;
   });
});

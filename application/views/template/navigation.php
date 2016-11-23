<!DOCTYPE html>
<html>
<style>
.box {
   position: relative;
   top: 0;
   opacity: 1;
   float: left;
   padding: 60px 50px 40px 50px;
   width: 100%;
   background: #fff;
   border-radius: 10px;
   transform: scale(1);
   -webkit-transform: scale(1);
   -ms-transform: scale(1);
   z-index: 5;
}

.box.back {
   transform: scale(.95);
   -webkit-transform: scale(.95);
   -ms-transform: scale(.95);
   top: -20px;
   opacity: .8;
   z-index: -1;
}

.box:before {
   content: "";
   width: 100%;
   height: 30px;
   border-radius: 10px;
   position: absolute;
   top: -10px;
   background: rgba(255, 255, 255, .6);
   left: 0;
   transform: scale(.95);
   -webkit-transform: scale(.95);
   -ms-transform: scale(.95);
   z-index: -1;
}

.overbox .title {
   color: #fff;
}

.overbox .title:before {
   background: #fff;
}

.title {
   width: 100%;
   float: left;
   line-height: 46px;
   font-size: 34px;
   font-weight: 700;
   letter-spacing: 2px;
   color: #ED2553;
   position: relative;
}

.title:before {
   content: "";
   width: 5px;
   height: 100%;
   position: absolute;
   top: 0;
   left: -50px;
   background: #ED2553;
}

.input,
.input label,
.input input,
.input .spin,
.button,
.button button .button.login button i.fa,
.material-button .shape:before,
.material-button .shape:after,
.button.login button {
   transition: 300ms cubic-bezier(.4, 0, .2, 1);
   -webkit-transition: 300ms cubic-bezier(.4, 0, .2, 1);
   -ms-transition: 300ms cubic-bezier(.4, 0, .2, 1);
}

.material-button,
.alt-2,
.material-button .shape,
.alt-2 .shape,
.box {
   transition: 400ms cubic-bezier(.4, 0, .2, 1);
   -webkit-transition: 400ms cubic-bezier(.4, 0, .2, 1);
   -ms-transition: 400ms cubic-bezier(.4, 0, .2, 1);
}

.input,
.input label,
.input input,
.input .spin,
.button,
.button button {
   width: 100%;
   float: left;
}

.input,
.button {
   margin-top: 30px;
   height: 70px;
}

.input,
.input input,
.button,
.button button {
   position: relative;
}

.input input {
   height: 60px;
   top: 10px;
   border: none;
   background: transparent;
}

.input input,
.input label,
.button button {
   font-family: 'Roboto', sans-serif;
   font-size: 24px;
   color: rgba(0, 0, 0, 0.8);
   font-weight: 300;
}

.input:before,
.input .spin {
   width: 100%;
   height: 1px;
   position: absolute;
   bottom: 0;
   left: 0;
}

.input:before {
   content: "";
   background: rgba(0, 0, 0, 0.1);
   z-index: 3;
}

.input .spin {
   background: #ED2553;
   z-index: 4;
   width: 0;
}

.overbox .input .spin {
   background: rgba(255, 255, 255, 1);
}

.overbox .input:before {
   background: rgba(255, 255, 255, 0.5);
}

.input label {
   position: absolute;
   top: 10px;
   left: 0;
   z-index: 2;
   cursor: pointer;
   line-height: 60px;
}

.button.login {
   width: 60%;
   left: 20%;
}

.button.login button,
.button button {
   width: 100%;
   line-height: 64px;
   left: 0%;
   background-color: transparent;
   border: 3px solid rgba(0, 0, 0, 0.1);
   font-weight: 900;
   font-size: 18px;
   color: rgba(0, 0, 0, 0.2);
}

.button.login {
   margin-top: 30px;
}

.button {
   margin-top: 20px;
}

.button button {
   background-color: #fff;
   color: #ED2553;
   border: none;
}

.button.login button.active {
   border: 3px solid transparent;
   color: #fff !important;
}

.button.login button.active span {
   opacity: 0;
   transform: scale(0);
   -webkit-transform: scale(0);
   -ms-transform: scale(0);
}

.button.login button.active i.fa {
   opacity: 1;
   transform: scale(1) rotate(-0deg);
   -webkit-transform: scale(1) rotate(-0deg);
   -ms-transform: scale(1) rotate(-0deg);
}

.button.login button i.fa {
   width: 100%;
   height: 100%;
   position: absolute;
   top: 0;
   left: 0;
   line-height: 60px;
   transform: scale(0) rotate(-45deg);
   -webkit-transform: scale(0) rotate(-45deg);
   -ms-transform: scale(0) rotate(-45deg);
}

.button.login button:hover {
   color: #ED2553;
   border-color: #ED2553;
}

.button {
   margin: 40px 0;
   overflow: hidden;
   z-index: 2;
}

.button button {
   cursor: pointer;
   position: relative;
   z-index: 2;
}

.pass-forgot {
   width: 100%;
   float: left;
   text-align: center;
   color: rgba(0, 0, 0, 0.4);
   font-size: 18px;
}

.click-efect {
   position: absolute;
   top: 0;
   left: 0;
   background: #ED2553;
   border-radius: 50%;
}

.overbox {
   width: 100%;
   height: 100%;
   position: absolute;
   top: 0;
   left: 0;
   overflow: inherit;
   border-radius: 10px;
   padding: 60px 50px 40px 50px;
}

.overbox .title,
.overbox .button,
.overbox .input {
   z-index: 111;
   position: relative;
   color: #fff !important;
   display: none;
}

.overbox .title {
   width: 80%;
}

.overbox .input {
   margin-top: 20px;
}

.overbox .input input,
.overbox .input label {
   color: #fff;
}

.overbox .material-button,
.overbox .material-button .shape,
.overbox .alt-2,
.overbox .alt-2 .shape {
   display: block;
}

.material-button,
.alt-2 {
   width: 140px;
   height: 140px;
   border-radius: 50%;
   background: #ED2553;
   position: absolute;
   top: 40px;
   right: -70px;
   cursor: pointer;
   z-index: 100;
   transform: translate(0%, 0%);
   -webkit-transform: translate(0%, 0%);
   -ms-transform: translate(0%, 0%);
}

.material-button .shape,
.alt-2 .shape {
   position: absolute;
   top: 0;
   right: 0;
   width: 100%;
   height: 100%;
}

.material-button .shape:before,
.alt-2 .shape:before,
.material-button .shape:after,
.alt-2 .shape:after {
   content: "";
   background: #fff;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%) rotate(360deg);
   -webkit-transform: translate(-50%, -50%) rotate(360deg);
   -ms-transform: translate(-50%, -50%) rotate(360deg);
}

.material-button .shape:before,
.alt-2 .shape:before {
   width: 25px;
   height: 4px;
}

.material-button .shape:after,
.alt-2 .shape:after {
   height: 25px;
   width: 4px;
}

.material-button.active,
.alt-2.active {
   top: 50%;
   right: 50%;
   transform: translate(50%, -50%) rotate(0deg);
   -webkit-transform: translate(50%, -50%) rotate(0deg);
   -ms-transform: translate(50%, -50%) rotate(0deg);
}

body {
   background-image: url(https://lh4.googleusercontent.com/-XplyTa1Za-I/VMSgIyAYkHI/AAAAAAAADxM/oL-rD6VP4ts/w1184-h666/Android-Lollipop-wallpapers-Google-Now-Wallpaper-2.png);
   background-position: center;
   background-size: cover;
   background-repeat: no-repeat;
   min-height: 100vh;
   font-family: 'Roboto', sans-serif;
}

body,
html {
   overflow: hidden;
}

.materialContainer {
   width: 100%;
   max-width: 460px;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   -webkit-transform: translate(-50%, -50%);
   -ms-transform: translate(-50%, -50%);
}

*,
*:after,
*::before {
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
   margin: 0;
   padding: 0;
   text-decoration: none;
   list-style-type: none;
   outline: none;
}
.container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
  overflow: hidden;
  margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
i.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 16px;  /* Preferred icon size */
  display: inline-block;
  line-height: 1;
  text-transform: none;
  letter-spacing: normal;
  word-wrap: normal;
  white-space: nowrap;
  direction: ltr;

  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
</style>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<title>Submit Form Using AJAX and jQuery</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>
<script>
$(function() {

   $(".input input").focus(function() {

      $(this).parent(".input").each(function() {
         $("label", this).css({
            "line-height": "18px",
            "font-size": "18px",
            "font-weight": "100",
            "top": "0px"
         })
         $(".spin", this).css({
            "width": "100%"
         })
      });
   }).blur(function() {
      $(".spin").css({
         "width": "0px"
      })
      if ($(this).val() == "") {
         $(this).parent(".input").each(function() {
            $("label", this).css({
               "line-height": "60px",
               "font-size": "24px",
               "font-weight": "300",
               "top": "10px"
            })
         });

      }
   });

   $(".button").click(function(e) {
      var pX = e.pageX,
         pY = e.pageY,
         oX = parseInt($(this).offset().left),
         oY = parseInt($(this).offset().top);

      $(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
      $('.x-' + oX + '.y-' + oY + '').animate({
         "width": "500px",
         "height": "500px",
         "top": "-250px",
         "left": "-250px",

      }, 600);
      $("button", this).addClass('active');
   })

   $(".alt-2").click(function() {
      if (!$(this).hasClass('material-button')) {
         $(".shape").css({
            "width": "100%",
            "height": "100%",
            "transform": "rotate(0deg)"
         })

         setTimeout(function() {
            $(".overbox").css({
               "overflow": "initial"
            })
         }, 600)

         $(this).animate({
            "width": "140px",
            "height": "140px"
         }, 500, function() {
            $(".box").removeClass("back");

            $(this).removeClass('active')
         });

         $(".overbox .title").fadeOut(300);
         $(".overbox .input").fadeOut(300);
         $(".overbox .button").fadeOut(300);

         $(".alt-2").addClass('material-buton');
      }

   })

   $(".material-button").click(function() {

      if ($(this).hasClass('material-button')) {
         setTimeout(function() {
            $(".overbox").css({
               "overflow": "hidden"
            })
            $(".box").addClass("back");
         }, 200)
         $(this).addClass('active').animate({
            "width": "700px",
            "height": "700px"
         });

         setTimeout(function() {
            $(".shape").css({
               "width": "50%",
               "height": "50%",
               "transform": "rotate(45deg)"
            })

            $(".overbox .title").fadeIn(300);
            $(".overbox .input").fadeIn(300);
            $(".overbox .button").fadeIn(300);
         }, 700)

         $(this).removeClass('material-button');

      }

      if ($(".alt-2").hasClass('material-buton')) {
         $(".alt-2").removeClass('material-buton');
         $(".alt-2").addClass('material-button');
      }

   });

});
</script>
<script>

$(document).ready(function(){
$("#event").click(function(){
var name = $("#ename").val();
var email = $("#ecategory").val();
var password = $("#elocation").val();
var contact = $("#edescription").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&email1='+ email + '&password1='+ password + '&contact1='+ contact;
if(name==''||email==''||password==''||contact=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "createevent.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
$("#ename").val("");
$("#ecategory").val("");
$("#elocation").val("");
$("#edescription").val("");

}
});
}
return false;
});
});
</script>
<script>

$(document).ready(function(){
//var checkedValue1 = $('#ecateg:checked').val();
//var checkedValue2 = $('#elocate:checked').val();
//var dataString= 'name1='+ checkedValue1 + '&email1='+ checkedValue2 ;
$.ajax({
type: "POST",
url: "showevent.php",
data: null,
cache: false,
success: function(result){
$("#results").html(result); 
}
});
return false;
});

</script>
<script>

$(document).ready(function(){
//var checkedValue1 = $('#ecateg:checked').val();
//var checkedValue2 = $('#elocate:checked').val();
//var dataString= 'name1='+ checkedValue1 + '&email1='+ checkedValue2 ;
$.ajax({
type: "POST",
url: "signinevent.php",
data: null,
cache: false,
success: function(result){
$("#res").html(result); 
}
});
return false;
});

</script>
<script>

$(document).ready(function(){
$("#filter").click(function(){
var e = document.getElementById("Loc");
var strUser1 = e.options[e.selectedIndex].text;
var e = document.getElementById("Cat");
var strUser2 = e.options[e.selectedIndex].text;
var dataString= 'name1='+ strUser1 + '&email1='+ strUser2 ;
$.ajax({
type: "POST",
url: "showfilteredevents.php",
data: dataString,
cache: false,
success: function(result){
$("#results2").html(result); 
}
});
return false;
});
});

</script>
</head>
<body>
<!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Zersey Internship Project-Online Events</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#scroll-tab-1" class="mdl-layout__tab is-active">Sign In for An Event</a>
      <a href="#scroll-tab-2" class="mdl-layout__tab">Create An Event</a>
    <a href="#scroll-tab-3" class="mdl-layout__tab">Show Events</a>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
  </div>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
  
      <div class="page-content">
    <div class="mdl-grid"> 
   <div class="materialContainer">
   <div class="box">

      <div class="title">SIGN IN TO AN EVENT</div>

      <div class="input">
         <label for="name">Username OR Email Id</label>
         <input type="text" name="name" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input type="password" name="pass" id="pass">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button><span>GO</span> <i class="fa fa-check"></i></button>
      </div>

      <a href="" class="pass-forgot">Forgot your password?</a>

   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER NOW</div>

      <div class="input">
         <label for="regname">Username</label>
         <input type="text" name="regname" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" name="regpass" id="regpass">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input type="password" name="reregpass" id="reregpass">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>NEXT</span></button>
      </div>

      </div>
      </div>
      </div>
      </div>
    </section>
   <section class="mdl-layout__tab-panel" id="scroll-tab-2">
  
      <div class="page-content">
     <div class="mdl-grid">
          <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Create an Event</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Rules</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="ename"/>
                  <label class="mdl-textfield__label" for="username">Event Name</label>
                </div>

                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="ecategory"/>
                  <label class="mdl-textfield__label" for="username">Event Category</label>
                </div>

                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="elocation"/>
                  <label class="mdl-textfield__label" for="username">Event Location</label>
                </div>

                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="edescription"/>
                  <label class="mdl-textfield__label" for="username">Event Description</label>
                </div>


               <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled">
               <span class="input-group-btn">

               !-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
               <div class="btn btn-default image-preview-input">
                                       <span class="glyphicon glyphicon-folder-open"></span>
                    <span class="image-preview-input-title">Browse</span>
                    <input class ="form-control" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                              </div>    
            </span>
                                    </div>      
                  
              

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="event" href="#" class="btn btn-warning"> Create Event Now </a>
                                     
                                    </div>
                                </div>

                            </form>     



                        </div>                     
                    </div>  
        
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-3">
      <div class="page-content">
    <div class="page-content">
     <div class="mdl-grid">
          <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Show Events Based on your Filter</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                  

  
                <div style="margin-top: 25px" class="input-group">
              <div id="results">
              </div>
              </div>
                            <div style="margin-top: 50px" class="input-group">
                                         <button id="filter" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Filter </button>
                                                                             
                                    </div>
                                
                            <div id="results2">
              </div>

                              



                        </div>                     
                    </div>  
        </div>
       
    </div>
    
    </div>
    </div>
  
    </div>
    </section>
  </main>
</div>

</body>
</html>
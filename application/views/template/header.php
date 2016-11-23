<!DOCTYPE html>
<html lang="en">
<style>
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
</style>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- MATERIAL DESIGN LITE(MDL) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

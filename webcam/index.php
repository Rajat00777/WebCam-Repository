
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#filename").hide();
        $("#show").show();
        $("#hide").hide();
    });

    $("#show").click(function(){        
        $("#filename").show();  
        $("#show").hide();      
        $("#hide").show();
    });
})
</script>

<form action="#" method="POST" enctype="multipart/form-data">
<td colspan="1">						
<div id="results">Your captured image will appear here...</div>  
</td> 

<br>
<input type="button" value="Hide Upload Button" id="hide" style="display:none;" >  
<input type="button" value="Show Upload Button" id="show" > 
<br><br>
Upload Image :- <input type="file" name="filename" id="filename" style="display:none;">
<br>
<br>
<div id="my_camera"></div>
<input type='button' value="Take Snapshot" class="btn btn-success" onClick="take_snapshot()" style="margin-bottom:10px; margin-top: 10px; margin-left: 6px; ">
<input type="hidden" name="image" class="image-tag">
</form>

<!-- Added Code For Webcam Starts-->
<style type="text/css">
#results { padding:0px; border:1px solid; background:lightsteelblue; width:160px; height:126px; font-size: 17px; text-align:center; }
</style>
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
Webcam.set({
width: 158,
height: 124,
image_format: 'jpeg',
jpeg_quality: 90
});

Webcam.attach( '#my_camera' );

function take_snapshot() {
Webcam.snap( function(data_uri) {
$(".image-tag").val(data_uri);
document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
} );
}
</script>
<!-- Added Code For Webcam End-->




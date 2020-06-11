<?php 
session_start();
//include('conn.php');

if(!isset($_SESSION['username'])){

}

else{

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           <b> ( One Day ) PASS ENTRY DETAILS </b>
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                               
                             </span>
                        </header>
                        <div class="panel-body">
                            
                            <form role="form" class="form-horizontal" method="POST" action="day_pass_insert.php" enctype="multipart/form-data">
                                <div class="form-group has-success" id="no_print">
                                    <label class="col-lg-3 control-label"> Photo Upload : </label>
                                    <div class="col-lg-3">
                                       <div id="my_camera"></div>
                                        <br/>
                                        <input type=button value="Take Snapshot" onClick="take_snapshot()">
                                        <input type="hidden" name="image" class="image-tag">
                                    </div>

                                </div><br>

                                <!-- Here preview Image End-->
                               
                                 <div class="form-group has-success">
                                    <label class="col-lg-3 control-label"> Uploaded Photo : </label>
                                    <div class="col-lg-3" style="width: 52%; ">
                                       <div id="results">Your captured image will appear here...</div>  
                                        
                                    </div>

                                </div><br>   

								 <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit" name="submit" id="submit_button" >Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
					
				<!-- Added Code For Webcam Starts-->
				<style type="text/css">
				#results { padding:20px; border:1px solid; background:lightsteelblue; }
				</style>

				<!-- Configure a few settings and attach camera -->
				<script language="JavaScript">
				Webcam.set({
				width: 490,
				height: 390,
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
					
					</section>
                </div>
            </div>
        
</section>
 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2019 UPSC. All rights reserved</a></p>
            </div>
          </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>

</body>
</html>
<?php } ?>
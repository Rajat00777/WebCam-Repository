<video id="vid" height="120" width="160" muted="muted" autoplay></video><br>
<button onclick="vidOff()">vidOff!</button><br>
<div id="div"></div>


<script>
var console = { log: function(msg) { div.innerHTML += "<p>" + msg + "</p>"; } };

var localstream;
if (navigator.webkitGetUserMedia!=null) {

    var options = { 
        video:true, 
        audio:false 
    };  
    navigator.webkitGetUserMedia(options, 
        function(stream) { 
        //vid.src = window.webkitURL.createObjectURL(stream);

        //
        vid.srcObject=stream;
        vid.play();
        //
        //localstream = stream;
        //vid.play();
        console.log("streaming");
    }, 
        function(e) { 
        console.log("background error : " + e.name);
        }); 
}

function vidOff() {
//    clearInterval(theDrawLoop);
//    ExtensionData.vidStatus = 'off';
//     vid.pause();
//     vid.src = "";
//     localstream.stop();
// //    DB_save();
//     console.log("Vid off");

vid.pause();
  vid.src = "";
  //localstream.getTracks()[0].stop();
        vid.srcObject=stream;
        vid.stop();
  console.log("Vid off");
}</script>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
  <h1>Load Javascript dynamically with jQuery</h1>

<div id="content"></div>
<br/>

<button id="load">Load JavaScript</button>
<button id="sayHello">Say Hello</button>

<script type="text/javascript">

$("#load").click(function(){
  $.getScript('webcamlib/webcam.min.js', function() {
        alert('Hello');
  });
});

$("#sayHello").click(function(){
  sayHello();
});

</script>
</body>
</html>
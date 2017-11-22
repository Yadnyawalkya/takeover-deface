<!DOCTYPE html>

<head>
	<title>Resposible disclosure</title>
	<meta http-equiv="refresh" content="5"/>
</head>

<script>alert("subdomain takeover")</script>
<body>
	<h1 align="center">Test page</h1>
	<h3 align="center">Hello, this is resposible disclosure. Your <span id="span1"></span> subdomain takeovered by <a href="http://twitter.com/yvtale">Yadnyawalkya Tale</a>.
		<br/>I have contacted your support team, request you to contact yadnyawalkyatale@gmail.com for further information.
	</h3>
	<br/>
	<p align="center">
		<img align="justify" src="thinkinfosec.png"  height="400"></img>
		<br/>

		<h3 align="center">I love pressing F5. It's so refreshing..</h3>
	</p>
	<script>
	window.onload = function(){
    		document.getElementById('span1').innerHTML = document.domain;
	}
	</script>
</body>

</html>

<?php
	// init class
	$instagram = new Instagram(array(
        	'apiKey'      => 'a5144346058d4b7f879c73ac2f77fe13',
        	'apiSecret'   => '7bcbc6763f7e40aeadc347c4d687184b',
        	'apiCallback' => 'YOUR_APP_CALLBACK' //must point to success.php
        ));
	
	// create login URL
	$loginUrl = $instagram->getLoginUrl();

?>

<html>
<head>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<h1>Hello, how'ya doin'</h1>
</body>
</html>

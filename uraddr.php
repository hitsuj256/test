<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="aws.css">
        <title>確認くんもどき</title>
</head>
<body>
	<?php
	        echo "<h4>Your IP address and port number</h4>";
	        echo $_SERVER["REMOTE_ADDR"],":",$_SERVER["REMOTE_PORT"],"<br><br>";
		
	        echo "<h4>HTTP Request Header</h4><table>";
	        $headers = getallheaders();
	        while (list ($header, $value) = each ($headers)) {
	                echo "<tr><td>$header</td> <td>$value</td></tr>";
	        };
	        echo "</table>";
	?>
</body>

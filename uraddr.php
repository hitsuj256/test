<head>
    <title>kakunin</title>
    <style type="text/css">
        body {
            background-color: #222;
            color: #3f3;
        }
    </style>
</head>
<body>
<?php
    echo "<h4>Your IP address and port number</h4>";
    echo $_SERVER['REMOTE_ADDR'], " : ", $_SERVER['REMOTE_PORT'];
    echo "<br><br>";

    echo "<h4>HTTP Request Header</h4>";
    echo "<table>";
    foreach ($_SERVER as $k=>$v) {
        if (substr($k,0,5)=='HTTP_') {
            echo "<tr><td>$k</td><td>$v</td></tr>";
        }
    }
    echo "</table>";
?>
</body>

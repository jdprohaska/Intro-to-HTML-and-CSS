
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact form response</title>
<link rel="stylesheet" type="text/css" href="css/koala.css">
<style>
	body {
		border: 3px solid blue;
		padding: 100px;
		margin: 10px;
	}
	
	h2 {
		backround-color: blue;
	}

</style>
</head>

<body>
<img src="images/koala_banner_new(3).jpg" alt="koala bear banner">
<nav>
                <ul>
                    <li><a href="koala_home.html">Home</a></li>
                    <li><a href="koala_about.html">About</a></li>
                    <li><a href="fast_facts.html">Fast Facts</a></li>
                    <li>Gallery</li>
                    <li>Adopt</li>
                    <li><a href="contact.html">Contact Us!</a></li>
                </ul>
                </nav>

<h1>Thank you!</h1>
<h2>Your Post has been submitted</h2>
<p><img class="floatright" src="images/koala-1459298_640.png" alt="a cartoon koala hanging on a branch">
</p>






<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed'>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

</body>
</html>

<!--submitted.php-->

<!DOCTYPE HTML>

<HTML class="submitted">
	<head>
		<title>Thank You</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css"> <!--External CSS-->
	</head>

	<body>

		<div class="header">
		<img src="images/LogoMakr_9SL8Uq.jpeg" alt="My Logo">
		<p>Created my freelogo at <a href="https://logomakr.com/"
		target="_blank">Logomakr.com</a></p>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="places.html">Places I've Been To</a></li>
			<li><a href="facts.html">Random Facts</a></li>
			<li><a href="where.html">Where Have You Travelled To?</a></li>
			<li><a href="shared_locations.php">Shared Locations</a></li>
		</ul>
		</div>

    <section id="container">
		<h2>Thank you 
			<?php
			 
			$first_name = $_POST['first_name'];
			$location = $_POST['location'];
			echo $first_name;
			
			$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=allencba';
			$username = 'allencba';
			$password = 'cyulv[';
			  
			// creates PDO object
			$db = new PDO($dsn, $username, $password);
			$query = "INSERT INTO locations
			VALUES
			('$first_name', '$location')";
			  
			$insert_count = $db->exec($query);
			  
			//echo $insert_count;
			?> for sharing your location!</h2>
    </section>

  </body>
</html>

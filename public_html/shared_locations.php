<!--shared_locations.php-->

<!DOCTYPE HTML>

<HTML class="shared">
	<head>
		<title>Shared Locations</title>
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
			<li><a class ="active" href="shared_locations.php">Shared Locations</a></li>
		</ul>
		</div>
		
		<h1>Your Shared Locations</h1>
		
		<table>
			<tr><th>Name</th><th>Location</th></tr>
		<?php
			$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=allencba';
			$username = 'allencba';
			$password = 'cyulv[';
			
			// creates PDO object
			$db = new PDO ($dsn, $username, $password);
			$locations = $db->query('SELECT * FROM locations');
			foreach ($locations as $location) {
				echo "<tr><td>". $location['first_name'] . "</td>";
				echo "<td>" . $location['location'] . "</td>";
				echo "</td></tr>";
			}
		?>
		</table>
	</body>
</html>
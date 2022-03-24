<?php
error_reporting(0);
$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname 		= "tigerdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Harcomia NFT Game</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

	<meta name="generator" content="Construct 3">
	<meta name="author" content="Harcomia">
	<meta name="description" content="Adventure &amp; Logic Pixel Art Game NFT">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>

	<link rel="manifest" href="appmanifest.json">
	<link rel="apple-touch-icon" sizes="128x128" href="icons/icon-128.png">
	<link rel="apple-touch-icon" sizes="256x256" href="icons/icon-256.png">
	<link rel="apple-touch-icon" sizes="512x512" href="icons/icon-512.png">
	<link rel="icon" type="image/png" href="icons/icon-512.png">

	<script type = "text/javascript" src ="scripts/jquery.min.js"></script>
	<style>
		table {
			clear: both;
			width: 100%;
		}

		table td, th {
			border: dotted 1px #777;
			padding: 3px;
			height: 2.5em;
			background-color: #F5F5F5;
		}

		table th {
			background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #eeeeee), color-stop(100%, #cccccc));
			background-image: -webkit-linear-gradient(top, #eeeeee, #cccccc);
			background-image: -moz-linear-gradient(top, #eeeeee, #cccccc);
			background-image: -ms-linear-gradient(top, #eeeeee, #cccccc);
			background-image: -o-linear-gradient(top, #eeeeee, #cccccc);
			background-image: linear-gradient(top, #eeeeee, #cccccc);
		}
	</style>
</head>
<body>
	<h2>Table Scorer</h2>
	<table class="table-list">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Loyalties Point</th>
			<th>Gem Total</th>
			<th>HCA Point Total</th>
			<th>Update Date</th>
		</tr>
		<?php
		$sql = "select username, loyalties_point, gem_total, hca_point_total, update_date from  game_score";
		$exe = $conn->query($sql);
		$x=0;
		while($row = $exe->fetch_array()){
			$x++;
			echo "<tr>";
				echo "<td align='center'>".$x."</td>";
				echo "<td align='center'>".$row['username']."</td>";
				echo "<td align='center'>".$row['loyalties_point']."</td>";
				echo "<td align='right'>".$row['gem_total']."</td>";
				echo "<td align='right'>".$row['hca_point_total']."</td>";
				echo "<td align='center'>".$row['update_date']."</td>";
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>
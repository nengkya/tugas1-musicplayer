<?php

include "app/Played.php";

$id = $_GET['id'];

$playd = new Played();
$row = $playd->edit($id);

?>
<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">

<body>

	<div class="container">
		<div class="header">
			<center><img src="layout/assets/images/header.png"></center>
		</div>

		<center>
			<div class="menu">
		<a href="index.php">HOME</a>
				<a href="artist_tampil.php">ARTIST</a>
				<a href="album_tampil.php">ALBUM</a>
				<a href="track_tampil.php">TRACK</a>
				<a href="played_tampil.php">PLAYED</a>
				<a href="logout.php">LOGOUT</a>

			</div>
		</center>


		<center class="main">
			<h2>PLAYIST EDIT</h2>
		</center>
		<form method="POST" action="played_proses.php">
			<input type="hidden" name="played_id" value="<?php echo $id; ?>">
			<table width="400px" bgcolor="#353535" cellpadding="10" cellspacing="5" bgcolor="#4f4f4f" align="center">
				<tr>
					<td>ARTIST ID</td>
					<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
				</tr>
				<tr>
					<td>ALBUM ID</td>
					<td><input type="text" name="album_id" value="<?php echo $row['album_id']; ?>"></td>
				</tr>
				<tr>
					<td>TRACK ID</td>
					<td><input type="text" name="track_id" value="<?php echo $row['track_id']; ?>"></td>
				</tr>
				<tr>
					<td>PLAYED</td>
					<td><input type="text" name="played" value="<?php echo $row['played']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn-edit" value="UPDATE"></td>
				</tr>
			</table>
		</form>
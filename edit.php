<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP PRACTICE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Kushal's Contact app</h1>
	</header>
	<h2>Update the information</h2>
	<?php 
		include 'db.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM names where id=".$id;
		$result=mysqli_query($conn,$sql);

		if($result)
		{
			$row=mysqli_fetch_assoc($result);
			$contactname = $row['name'];
			$contactphone = $row['phone'];
		}
	?>
	<form action="editaction.php" method="post">
		<div class="main">
			<label for="name">Name:</label><br>
			<input type="text" name="name" id="name" value="<?php global $contactname; echo $contactname ?>" required placeholder="Enter Name"><br>
			<label for="contact">Phone Number:</label><br>
			<input type="number" name="contact" id="contact" value="<?php global $contactphone; echo $contactphone ?>" required placeholder="Enter Your Number"><br><br>
			<input type="hidden" name="id" id="id" value="<?php global $id; echo $id ?>" required>
			<input type="submit" value="Update">
		</div>
	</form>
	
</body>
</html>
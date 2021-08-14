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
	<form action="adddata.php" method="post">
		<div class="main">
			<label for="name">Name:</label><br>
			<input type="text" name="name" id="name" required placeholder="Enter Name"><br>
			<label for="contact">Phone Number:</label><br>
			<input type="number" name="contact" id="contact" required placeholder="Enter Your Number"><br><br>
			<input type="submit" value="Save">
		</div>
	</form>
	<hr>
	<h2>List of Contact</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Actions</th>
		</tr>
		<?php
			include 'db.php';
			$sql="SELECT * FROM names";
			$result = mysqli_query($conn,$sql);

			if($result){
				while($row = mysqli_fetch_assoc($result)){
					$id=$row['id'];
					$name=$row['name'];
					$phone=$row['phone'];

					?>
					<tr>
			<td><?php echo $name; ?></td>
			<td><?php echo $phone; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $id?>">Update</a>				<a href="delete.php?id=<?php echo $id?>">Delete</a>
			</td>
		</tr>
					<?php
				}
			}
		?>
		
	</table>
	<?php 





	//some php code learnt
	// To declare a variable
	// $name = "Kushal";
	// echo "Hello, ".$name;
	// $num1= 20;
	// $num2 = 10;
	// $sum = $num1 + $num2;
	// echo "<br>The sum is ".$sum;

	// To make a constant
	// define("name", "<br>Kushal");
	// echo name;
 // 		$age = 22;
 // 		if ($age > 18) {
 // 			echo "You are voter";
 // 		}
 // 		else{
 // 			echo "You are not eligible to vote.";
 // 		}

	// ARRAY
	// $name = array("Kushal","Ram","Sangita");
	// foreach ($name as $value) {
	// 	echo $value."<br>";
	// }
	//Function in php
	// function printName($name)
	// {
	// 	echo $name;
	// }
	//Function call
	// printName("Kushal Devkota");
	 ?>
</body>
</html>
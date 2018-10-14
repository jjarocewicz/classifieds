<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	   <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Baker Classifieds - New Listing</title>
</head>
<body>
    <h1>Baker Classifieds - New Listing</h1>

    <form action="list.php" method="post">
		<p>
			<label for="title">Title:</label>
			<input type="text" name="title" id="title">
		</p>
		<p>
			<label for="description">Description:</label>
			<input type="text" name="description" id="description">
		</p>
		<p>
			<select name="category" id="category">
				<option value="auctions and garage, estate, and yard sales">Auctions and Garage, Estate, and Yard Sales</option>
				<option value="merchandise">Merchandise</option>
				<option value="services">Services</option>
				<option value="Pets">Pets</option>
			</select>
		</p>
		<p>
			<label for="price">Price:</label>
			<input type="text" name="price" id="price">
		</p>
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>

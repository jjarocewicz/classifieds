<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Baker Classifieds - New Listing</title>
</head>
<body>
    <h1>Baker Classifieds - New Listing</h1>

    <form action="list.php" method="post">
		<p>
			<label for="idProducts">Product ID:</label>
			<input type="text" name="product_id" id="idProducts">
		</p>
		<p>
			<label for="title">Title:</label>
			<input type="text" name="title" id="title">
		</p>
		<p>
			<label for="description">Description:</label>
			<input type="text" name="description" id="description">
		</p>
		<p>
			<label for="category">Category:</label>
			<input type="text" name="category" id="category">
		</p>
		<p>
			<label for="price">Price:</label>
			<input type="text" name="price" id="price">
		</p>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
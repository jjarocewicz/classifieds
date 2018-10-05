<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Baker Classifieds - New Listing</title>
</head>
<body>
    <h1>Baker Classifieds - New Listing</h1>

    <form action="list.php" method="post" enctype="multipart/form-data">
		<p>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </p>
		
		<p>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </p>
		
		<p>
            <label for="category">Category</label>
            <input type="text" name="category" id="category">
        </p>
        
        <p>
            <label for="price">Price $</label>
            <input type="text" name="price" id="price">
        </p>
		
        <p>
            <label for="image">Select Image to Upload</label>
            <input type="file" name="image" id="image">
			<input type="submit" value="Upload Image" name="submit">
        </p>
        
		<input type="submit" value="Submit"></td>
       
    </form>
</body>
</html>
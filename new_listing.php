<!DOCTYPE html>
<html lang="en" >

    <head>
        <title>Baker Classifieds</title>
        <link href = "lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel = "stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </head>

<body>
  <?php
      include "nav.php";
  ?>
    <h3>Baker Classifieds - New Listing</h3>

    <div class="container" id="listing_fields">

      <form class = "form-listing" role = "form" action="list.php" method="post" enctype="multipart/form-data>
			     <label for="title">Title:</label>
			     <input type="text" class = "form-control" name="title" id="title"></br>

			     <label for="description">Description:</label>
			     <input type="text" class = "form-control" name="description" id="description"></br>

           <label for="imageToUpload">Select image to upload:</label>
           <input type="file" name="imageToUpload" id="imageToUpload"></br>

           <label for="category">Please Choose a category:</label>
			     <select class = "form-control" name="category" id="category">
                <optgroup>
  				         <option value="1">Auctions and Garage, Estate, and Yard Sales</option>
  				         <option value="2">Merchandise</option>
  				         <option value="3">Services</option>
  				         <option value="4">Pets</option>
                </optgroup>
			     </select></br>

			     <label for="price">Price:</label>
			     <input type="text" class = "form-control" name="price" id="price"></br>

		       <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" name="submit">
	    </form>
  </div>
</body>
</html>

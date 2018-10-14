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
    <img src="images/bc-logo_2017-1502808997-4638.jpg" alt="logo" class="img-responsive" id="brand_logo">

    <div class="container" id="listing_fields">

      <form class = "form-listing" role = "form" action="list.php" method="post">
			     <label for="title">Title:</label>
			     <input type="text" class = "form-control" name="title" id="title"></br>

			     <label for="description">Description:</label>
			     <input type="text" class = "form-control" name="description" id="description"></br>

           <label for="category">Please Choose a category:</label>
			     <select class = "form-control" name="category" id="category">
				         <option value="auctions and garage, estate, and yard sales">Auctions and Garage, Estate, and Yard Sales</option>
				         <option value="merchandise">Merchandise</option>
				         <option value="services">Services</option>
				         <option value="Pets">Pets</option>
			     </select></br>

			     <label for="price">Price:</label>
			     <input type="text" class = "form-control" name="price" id="price"></br>

		       <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" name="submit">
	    </form>
  </div>
</body>
</html>

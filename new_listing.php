<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Classifieds Site - New Listing</title>
    <link href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
    <?php
        include "nav.php";
    ?>
    <div class="container">
        <h1>Classifieds Site - New Item</h1>

        <form action="list.php" method="post" enctype="multipart/form-data">
            <table border="0">
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" maxlength="60" size="60" class="form-control"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td> <input type="text" name="description" maxlength="150" size="150" class="form-control"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td> <input type="text" name="category" maxlength="30" size="30" class="form-control"></td>
                </tr>
                <tr>
                    <td>Price $</td>
                    <td><input type="text" name="price" maxlength="7" size="7" class="form-control"></td>
                </tr>
                <tr>
                    <td>Select Image to Upload</td>
                    <td><input type="file" name="image" id="image"></td>
                </tr>
                <tr><td><br/></td></tr>
                <tr>
                    <td colspan="2"><input type="submit" value="List For Sale"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<?php
include "db.php";
$temp = '';
if (isset($_POST["submit"])) {

    $temp = "Running";
    $title = $_POST["title"];
    $url = $_POST["url"];
    $rating = $_POST["rating"];
    $description = $_POST["description"];
    $query = "INSERT INTO movie(title,description,url,rating) VALUES ('$title','$description','$url','$rating')";
    $rr = mysqli_query($connection, $query);
    if (!$rr) {
    } else {
        header("Location:movies.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add Movie</title>
</head>

<body>
    <div style="margin-top:10px ;padding-bottom:10px; padding-top:10px" class="container border primary">
        <form action="addMovie.php" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter movie title">
            </div>
            <div class="form-group">
                <label for="image-url">Image URL</label>
                <input type="text" class="form-control" placeholder="Enter image url" name="url">
            </div>
            <div class="form-group">
                <label for="Description">Image Description</label>
                <input type="text" class="form-control" placeholder="Enter description of movie" name="description">
            </div>
            <div class="form-group">
                <label for="Description">Rating out of 5</label>
                <input type="text" class="form-control" placeholder="Enter description of movie" name="rating">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
</body>
<?php
echo $temp;
?>

</html>
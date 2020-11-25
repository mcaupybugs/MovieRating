<!DOCTYPE html>
<html lang="en">
<?php
require "db.php";
?>

<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if (isset($_POST['addbook'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $user_id = $_SESSION['userid'];
        $addQuery = "INSERT INTO blog (user_id,title,body) VALUES ('$user_id','$title','$body')";
        $rr = mysqli_query($connection, $addQuery);
        if (!$rr) {
            header("Location:addBook.php");
        } else {
            header("Location:index.php");
        }
    }
} else {
    $result = "Login First!!";
    header('location: login.php');
    exit;
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <div class="login-main-text">
        <h2>Add New Blog Post</h2>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form action="addBlog.php" method="post">
                <div class="form-group">
                    <label>Blog Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Blog Title">
                </div>
                <div class="form-group">
                    <label>Blog Body</label>
                    <input type="text" name="body" class="form-control" placeholder="Blog Body">
                </div>
                <button type="submit" name="addbook" class="btn btn-black">Add Blog Post</button>
            </form>
        </div>
    </div>
</div>
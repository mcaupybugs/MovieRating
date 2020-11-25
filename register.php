<?php
require "db.php";
?>


<?php
$result = '';
?>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = "User Added";
    $query = "SELECT COUNT($username) FROM user";
    $addQuery = "INSERT INTO user (username,password) VALUES ('$username','$password')";
    $rr = mysqli_query($connection, $addQuery);
    if (!$rr) {
        $result = "Username exists";
    } else {
        header("Location:index.php");
    }
}
?>
<link href="assets/css/styles.css" rel="stylesheet" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <div class="login-main-text">
        <h2>Application<br> Login Page</h2>
        <p>Login or register from here to access.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form action="register.php" method="POST">
                <?php
                echo "$result";
                ?>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="username" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <input type="submit" name="submit" class="btn btn-secondary"></input>
            </form>
            <a type="submit" href="login.php" class="btn btn-black">Login</a>
        </div>
    </div>
</div>
<?php
require "db.php";
// session_start();
?>

<?php
$result = '';
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

if (isset($_POST["login"])) {
    $result = "abs";
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to clean the values 
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM user WHERE username = '{$username}'";
    $select_user_query = mysqli_query($connection, $query);
    // if (!$select_user_query) {
    //     die("QUERY FAILED" . mysqli_error($connection));
    // }

    while ($row = mysqli_fetch_array($select_user_query)) {
        $db_id = $row['user_id'];
        $db_username = $row['username'];
        $db_password = $row['password'];

        // checking if password matches

        if ($password == $db_password) {
            $_SESSION['userid'] = $db_id;
            $_SESSION['username'] = $db_username;
            $_SESSION['password'] = $db_password;
            $_SESSION['loggedin'] = true;
            header("location: index.php");
        }
    }
    header("location:login.php");
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
            <form action="login.php" method="POST">
                <?php
                echo "$result";
                ?>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="username" class="form-control" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">

                </div>

                <button type="submit" name="login" class="btn btn-black">Login</button>
            </form>
            <a type="submit" href="register.php" class="btn btn-secondary">Register</a>

        </div>
    </div>
</div>
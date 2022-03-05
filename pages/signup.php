<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    

<?php
    include_once "../includes/header.php";
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="../includes/signup.php" method="post">
        <input type="text" name="name" placeholder="full name..">
        <input type="text" name="email" placeholder="email..">
        <input type="text" name="userId" placeholder="userId..">
        <input type="text" name="password" placeholder="password..">
        <input type="text" name="passwordrepeat" placeholder="repeat password..">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</section>

<?php
    if($_POST){
        if($_POST["error"] === "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        } else if($_POST["error"] === "invaliduid"){
            echo "<p>Choose a proper username!</p>";
        } else if($_POST["error"] === "invalidemail"){
            echo "<p>Choose a proper email!</p>";
        } else if($_POST["error"] === "passwordsdontmatch"){
            echo "<p>Passwords don't match!</p>";
        } else if($_POST["error"] === "statementfailed"){
            echo "<p>Something went wrong, try again!</p>";
        } else if($_POST["error"] === "usernametaken"){
            echo "<p>Username already taken!</p>";
        } else if($_POST["error"] === "none"){
            echo "<p>You have signed up!</p>";
        }
    }
?>
<?php include_once "../includes/footer.php"; ?>
</body>
</html>

<nav>
        <div class="container-fluid">
            <div class="col-md-12">
                <ul class="col-md-9">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="discover.php">about us</a></li>
                    <li><a href="blog.php">find blogs</a></li>
                    <?php
                        if(isset($_SESSION["useruid"])){
                            echo "<li><a href="profile.php">sign up</a></li>";
                            echo "<li><a href="includes/logout.inc.php">log in</a></li>";
                        } else {
                            echo "<li><a href="signup.php">sign up</a></li>";
                            echo "<li><a href="login.php">log in</a></li>";
                        }
                    ?>
                    
                </ul>
                <div class="col-md-3">
                    <p>hier komt een logo</p>
                </div>
            </div>
        </div>
</nav>



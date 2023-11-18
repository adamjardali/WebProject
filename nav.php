<!-- navbar.php -->

<?php
session_start();
?>

<nav>
    <ul>
        <?php
        if (isset($_SESSION['user'])) {
            // User is logged in
            $loggedInUser = $_SESSION['user'];
            echo '<li>Welcome, <span style="color: red;">' . $loggedInUser . '</span></li>';
            echo '<li><a href="CV/index.php">Check CV</a></li>';
            echo '<li><a href="Gallery/index.php">Gallery</a></li>';
            echo '<li><a href="Security/logout.php">Logout</a></li>';
        } else {
            // User is not logged in
            echo '<li><a href="Security/signin.php">Sign In</a></li>';
            echo '<li><a href="Security/signup.php">Sign Up</a></li>';
        }
        ?>
    </ul>
</nav>

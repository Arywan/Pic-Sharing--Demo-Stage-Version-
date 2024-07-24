<?php
session_start();
?>
<?php include 'header.php'; ?>


        <?php
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        header("Location: http://localhost:3000/main-page.php");
        die();
        ?>
<?php include 'footer.php'; 

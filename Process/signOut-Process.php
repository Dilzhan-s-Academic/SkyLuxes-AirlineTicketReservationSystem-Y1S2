<!--Dilshan Yapa S Y C T -->

<?php
    session_start();

    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 60 * 60 * 24, '/');
    }
    
    session_destroy();
    header('Location: ../index.php');
?>

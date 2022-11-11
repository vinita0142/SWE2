<?php
session_start();
if (isset($_SESSION['email'])) 
{ 
    session_unset();
    session_destroy(); 

    $_SESSION = array();
    echo "<script>location.href='../login/index.php'</script>"; 
} 
else 
    { echo "<script>location.href='../login/index.php'</script>"; 
    }
?>
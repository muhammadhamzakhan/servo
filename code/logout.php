<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
header("Location:index.php");
    exit;
?>

</body>
</html>
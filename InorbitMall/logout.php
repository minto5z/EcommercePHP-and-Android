<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
session_unset(); 
session_destroy();
header("Location: https://ecommerces-minto5z.c9users.io/InorbitMall/index.php"); 
exit();
?>

</body>
</html>
 <?php

 $cookie_name = "bquidns";
 $cookie_value = $authId;
 setcookie($cookie_name, $cookie_value, time() - (86400 * 50), "/");
 header("Location: index.php");
?>
 
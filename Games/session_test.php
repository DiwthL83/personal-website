<?php
   session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	



if($_SESSION['counter'] > 1) {
   $msg = "You have visited this page ".  $_SESSION['counter'] . " times ";
   $msg .= "in this session.";
   }
elseif ($_SESSION['counter'] = 1) {
   $msg = "You have visited this page ".  $_SESSION['counter'] ." time ";
   $msg .= "in this session.";
   }
  



   // $msg = "You have visited this page ".  $_SESSION['counter'];
   // $msg .= "in this session.";
?>


<!-- Unset destroys a single session variable. -->
<?php
   // unset($_SESSION['counter']);
?>

<!-- session_destroy destroys all session variables. -->
<?php
   // session_destroy();
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
      <?php  echo ( $msg ); ?>
   </body>
   
</html>




<p>
   To continue  click following link <br />
   
   <a  href = "session-test.php?<?php echo htmlspecialchars(SID); ?>">
</p>
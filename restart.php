<?php
    session_start();

   unset($_SESSION['card1']);
   unset($_SESSION['card2']);
   unset($_SESSION['card3']);
   unset($_SESSION['card4']);
   unset($_SESSION['result1']);
   unset($_SESSION['result2']);
   unset($_SESSION['result3']);
   unset($_SESSION['result4']);
   unset($_SESSION['finalscore1']);
   unset($_SESSION['finalscore2']);

    header('Location:gui.php')
?>
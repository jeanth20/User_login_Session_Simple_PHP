<?php
session_start();
if (isset($_SESSION['color'])) {
   $sessionSetTime = $_SESSION['color']['time'];
   $sessionLifeTime = $_SESSION['color']['life_time'];
   if ((time() - $sessionSetTime) > $sessionLifeTime) {
        unset($_SESSION['color']);
        print 'Session expired';
    }
}
?>
<?php
session_start();

$_SESSION['user'] = 'Shyam';
echo 'Session is set';

// session_destroy();
?>
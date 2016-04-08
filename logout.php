<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 08/04/2016
 * Time: 17:39
 */

session_start();
session_unset();
session_destroy();
header('Location: index.php');
exit();

?>
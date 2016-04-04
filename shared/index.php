<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 4/3/2016
 * Time: 8:37 PM
 */

/* get the routing location and load the proper page*/
$action = strtolower(filter_input(INPUT_POST, 'action'));
if($action == NULL){
    $action = strtolower(filter_input(INPUT_GET, 'action'));
}

switch($action){
    case 'home':

        header ('Location: home.php');
        break;

    case 'login':

        header ('Location: login.php');
        break;

    case 'contact':

        header('Location; contact.php');
        break;

    default:

        header('Location: home.php');
        break;
}

?>


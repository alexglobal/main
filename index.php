<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 4/3/2016
 * Time: 7:40 PM
 */
$pageTitle = 'Alexandria Global';


/* This call back function is called once the user is authenticated.  This function handles redirecting the user
 to their home page. */
function directToHome(){
    $user = $_SESSION['user'];

    if($user->getRole() == 'ADM'){
        header("Location: admin");
    } else {
        header("Location: user");
    }
}

/** Include the database credentials and then transfer control to /shared/index,
 * which contains the meat of the login handling code.
 */
include ('model/database.php');
header ("Location: shared");

?>
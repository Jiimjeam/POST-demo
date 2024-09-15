<?php

$con = mysqli_connect("localhost","root","","database-1") or die("Couldn't connect");

?>



<!-- MGA DAPAT E MEMORIZE NA SYNTAX -->


<!-- 

$con
#_POST                                       //tig kuhag value sa form which is ang name sa inpute type. "$username=$_POST ['username'];"
mysqli_query                                 //magamit sa pag DELETE ,UPDATE ,SELECT ,INSERT
difference between $email and email          //$email is php variable       //email kay column sa databse


session_start();
$username=$_POST ['username'];              //assign value sa $username sa 'username' na input sa form 
$id = $_SESSION['id'];                      //When a user logs into a website, information specific to that user (like their user ID) can be stored in the session to persist across different pages.
$_SESSION['id']                               accesses the session variable named id, which is typically assigned when the user logs in. This id would likely represent the user's unique identifier in the database.

-->
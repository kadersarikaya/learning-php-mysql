<?php

/*
Cookies are small files that are stored 
on a user's computer. They are designed
to hold a modest amount of data specific
to a particular client and website, and
can be accessed either by the web server
or the client computer. This allows the
server to deliver a page tailored to a
particular user, or the page itself can
contain some script which is aware of the
data in the cookie and so is able to carry
information from one visit to the website
(or related site) to the next.
*/
// Set cookie
// setcookie(
//    'name', 'Brad', time() + 86400*30
// );

if(isset($_COOKIE['name'])){
   echo 'User '.$_COOKIE['name'].' is set<br>';
} else {
   echo 'User is not set';
}

<?php
session_start();
?>

<!-- // A session is a way to store information (in variables) to be used across multiple pages.
//Unlike a cookie, the information is not stored on the users computer.


//Note: The session_start() function must be the very first thing in your document. 
//Before any HTML tags. -->





<!-- How does it work? How does it know it's me?

Most sessions set a user-key on the user's computer that looks something like this: 
765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it 
scans the computer for a user-key. If there is a match, it accesses that session, if not, 
it starts a new session. 


-->



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 27</title>
</head>
<body>

<?php
// Set session variables
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
// echo "<h1>Session variables are set.</h1>";



// //To change a session variable, just overwrite it:
// $_SESSION["favcolor"] = "yellow";

// // remove all session variables
// session_unset();

// // destroy the session
// session_destroy(); 


/**
 * session_destroy() function: It destroys all of the data associated with the current session.
 *  It does not unset any of the global variables associated with the session, or unset the
 *  session cookie.
 * 
 * session_unset() function: It deletes only the variables from session and 
 * session still exists. Only data is truncated.
 */
?>
    
</body>
</html>



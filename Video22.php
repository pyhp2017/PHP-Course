<?php

// Php Forms

// The code above is quite simple. However, the most important thing is missing.
// You need to validate form data to protect your script from malicious code.

/**

Think SECURITY when processing PHP forms!

This page does not contain any form validation, it just shows how you can send and retrieve form data.

However, the next pages will show how to process PHP forms with security in mind! Proper validation of form data is important to protect your form from hackers and spammers!




$_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method.

Information sent from a form with the GET method is visible to everyone
 (all variable names and values are displayed in the URL).
  GET also has limits on the amount of information to send. The limitation is about 2000 characters. 
  However, because the variables are displayed in the URL, it is possible to bookmark the page.
   This can be useful in some cases.


   GET may be used for sending non-sensitive data.



   Note: GET should NEVER be used for sending passwords or other sensitive information!

   

   Moreover POST supports advanced functionality such as support for multi-part binary 
   input while uploading files to server.
   Developers prefer POST for sending form data.


 */


 
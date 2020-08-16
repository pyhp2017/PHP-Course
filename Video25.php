<?php


// ----------PHP Advanced----------



// =========================date function=========================

// echo "Today is " . date("Y/m/d") . "\n";
// echo "Today is " . date("Y.m.d") . "\n";
// echo "Today is " . date("Y-m-d") . "\n";
// echo "Today is " . date("l");


// echo "&copy - " . date("Y");



// date_default_timezone_set("Asia/Tehran");
// echo "The time is " . date("h:i:sa");



// =========================File=========================

//1.
// echo readfile("Video25Read.txt");

//2.
// $myfile = fopen("Video25Read.txt", "r") or die("Unable to open file!");
// The first parameter of fread() contains the name of the file to read from and 
// the second parameter specifies the maximum number of bytes to read.
// echo fread($myfile,filesize("Video25Read.txt"));
// fclose($myfile);

//It's a good programming practice to close all files after you have finished with them. 
//You don't want an open file running around on your server taking up resources!



//3.
// $myfile = fopen("Video25Read.txt", "r") or die("Unable to open file!");
// echo fgets($myfile);
// echo fgets($myfile);
// fclose($myfile);



//4.
// $myfile = fopen("Video25Read.txt", "r") or die("Unable to open file!");
// // Output one line until end-of-file
// while(!feof($myfile)) 
// {
//   echo fgets($myfile) . "\n";
// }
// fclose($myfile);


//fgetc ->read single character



// $myfile = fopen("Video25Read.txt", "a+") or die("Unable to open file!");
// $strToAdd = "\nYoutube";
// fwrite($myfile,$strToAdd);
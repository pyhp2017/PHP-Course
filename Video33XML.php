<?php

//Show Errors
// error_reporting(E_ALL); 
// ini_set('display_errors','1');


// $q=$_GET["q"];

// $xmlDoc = new DOMDocument();
// $xmlDoc->load("Video33.xml");

// $x=$xmlDoc->getElementsByTagName('ARTIST');

// for ($i=0; $i<=$x->length-1; $i++) 
// {
//   //Process only element nodes
//   if ($x->item($i)->nodeType==1) 
//   {
//     if ($x->item($i)->childNodes->item(0)->nodeValue == $q) 
//     {
//       $y=($x->item($i)->parentNode);
//     }
//   }
// }

// $cd=($y->childNodes);

// for ($i=0;$i<$cd->length;$i++) 
// {
//   //Process only element nodes
//   if ($cd->item($i)->nodeType==1) 
//   {
//     echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
//     echo($cd->item($i)->childNodes->item(0)->nodeValue);
//     echo("<br>");
//   }
// }




$vote = $_REQUEST["vote"];

//get content of textfile
$filename = "Video33.txt";
$myfile = fopen($filename, "r") or die("Unable to open file!");
$myString = fgets($myfile);
fclose($myfile);
//put content in array
$array = explode("||", $myString);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) 
{
  $yes = $yes + 1;
}
if ($vote == 1) 
{
  $no = $no + 1;
}



//insert votes to txt file
$insertvote = $yes."||".$no;
$fileToAdd = fopen($filename, "w") or die("Unable to open file (Here)!");
fwrite($fileToAdd,$insertvote);
fclose($fileToAdd);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td><img src="poll.gif" alt="Loading"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td><img src="poll.gif" alt="Loading"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>
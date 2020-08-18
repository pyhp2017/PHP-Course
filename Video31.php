<?php


/**


Source: https://www.w3schools.com/xml/

XML stands for eXtensible Markup Language.

XML was designed to store and transport data.

XML is a markup language much like HTML

XML and HTML were designed with different goals:

    XML was designed to carry data - with focus on what data is
    HTML was designed to display data - with focus on how data looks
    XML tags are not predefined like HTML tags are


XML was designed to be both human- and machine-readable.

XML plays an important role in many different IT systems.

XML is often used for distributing data over the Internet.

It is important (for all types of software developers!) to have a good understanding of XML.



Maybe it is a little hard to understand, but XML does not DO anything.



<note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don't forget me this weekend!</body>
</note>



But still, the XML above does not DO anything. XML is just information wrapped in tags.



XML Simplifies Things

    It simplifies data sharing
    It simplifies data transport
    It simplifies platform changes
    It simplifies data availability


XML stores data in plain text format. This provides a software- and hardware-independent way of storing,
 transporting, and sharing data.

XML also makes it easier to expand or upgrade to new operating systems, new applications, or 
new browsers, without losing data.

With XML, data can be available to all kinds of "reading machines" like people, computers, 
voice machines, news feeds, etc.

*/





/**

To read and update, create and manipulate an XML document, you will need an XML parser.
In PHP there are two major types of XML parsers:

    Tree-Based Parsers
    Event-Based Parsers


Tree-based parsers holds the entire document in Memory and transforms the XML document into a Tree
structure. It analyzes the whole document, and provides access to the Tree elements (DOM).

This type of parser is a better option for smaller XML documents, but not for large XML document as 
it causes major performance issues.





Event-based parsers do not hold the entire document in Memory, instead, they read in one node 
at a time and allow you to interact with in real time. Once you move onto the next node,
 the old one is thrown away.

This type of parser is well suited for large XML documents. It parses faster and consumes less memory. 




SimpleXML is a PHP extension that allows us to easily manipulate and get XML data.
SimpleXML is a tree-based parser.



*/


$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

// $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
// print_r($xml);




//Error Handling Tip: Use the libxml functionality to retrieve all XML errors when loading the document 
//and then iterate over the errors. The following example tries to load a broken XML string:
// libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>John Doe</wronguser>
<email>john@example.com</wrongemail>
</document>";

// $xml = simplexml_load_string($myXMLData);
// if ($xml === false) {
//   echo "Failed loading XML: ";
//   foreach(libxml_get_errors() as $error) {
//     echo "\n", $error->message;
//   }
// } else {
//   print_r($xml);
// }




//Read From File

// $xml=simplexml_load_file("Video31.xml") or die("Error: Cannot create object");
// echo $xml->book[0]->title;
// print_r($xml);




//Loop

// $xml=simplexml_load_file("Video31.xml") or die("Error: Cannot create object");
// for($i=0 ; $i<count($xml->book) ; $i++)
// {
//     echo "Title: " . $xml->book[$i]->title . " , ";
//     echo "Author: " . $xml->book[$i]->author . " , ";
//     echo "Year: " . $xml->book[$i]->year . " , ";
//     echo "Price: " . $xml->book[$i]->price;
//     echo "\n\n";
// }





// PHP SimpleXML - Get Attribute Values

// $xml=simplexml_load_file("Video31.xml") or die("Error: Cannot create object");
// echo $xml->book[1]['category'] . "\n";





//Initialize the XML parser
// $parser=xml_parser_create();

// //Function to use at the start of an element
// function start($parser,$element_name,$element_attrs) {
//     switch($element_name) {
//         case "book":
//         echo "-- book --\n";
//     break;
//         case "title":
//         echo "title: ";
//     break;
//         case "author":
//         echo "author: ";
//     break;
//         case "year":
//         echo "year: ";
//     break;
//         case "price":
//         echo "price: ";
//     }
// }

// //Function to use at the end of an element
// function stop($parser,$element_name) {
//     echo "\n";
// }

// //Function to use when finding character data
// function char($parser,$data) {
//     echo $data;
// }

// //Specify element handler
// xml_set_element_handler($parser,"start","stop");

// //Specify data handler
// xml_set_character_data_handler($parser,"char");

// //Open XML file
// $fp=fopen("Video31.xml","r");

// //Read data
// while ($data=fread($fp,4096)) 
// {
//     xml_parse($parser,$data,feof($fp)) or
//     die (sprintf("XML Error: %s at line %d",
//     xml_error_string(xml_get_error_code($parser)),
//     xml_get_current_line_number($parser)));
// }

// //Free the XML parser
// xml_parser_free($parser);
<?php


// PHP - Static Methods

/**
    Static methods can be called directly - without creating an instance of a class.
    Static methods are declared with the static keyword:
 */


//Example

// class greeting 
// {
//     public static function welcome() 
//     {
//       echo "Hello World!";
//     }
// }
  
//   // Call static method
//   greeting::welcome();






// PHP - More on Static Methods

// class greeting 
// {
//     public static function welcome() 
//     {
//       echo "Hello World!";
//     }
  
//     public function __construct() 
//     {
//       self::welcome();
//     }
// }
  

//   new greeting();





//Static method in Parent class

// class domain {
//     protected static function getWebsiteName() {
//       return "W3Schools.com";
//     }
//   }
  
//   class domainW3 extends domain 
//   {
//     public $websiteName;

//     public function __construct() 
//     {
//       $this->websiteName = parent::getWebsiteName();
//     }
//   }
  
//   $domainW3 = new domainW3;
//   echo $domainW3 -> websiteName;





// PHP - Static Properties

// Static properties can be called directly - without creating an instance of a class.

// Static properties are declared with the static keyword:


// class pi {
//     public static $value = 3.14159;
//   }
  
//   // Get static property
//   echo pi::$value;





// // PHP - More on Static Properties

// class pi {
//     public static $value=3.14159;
//     public function staticValue() {
//       return self::$value;
//     }
//   }
  
//   $pi = new pi();
//   echo $pi->staticValue(); 



//   //Static Field in Parent Class
  class pi {
    public static $value=3.14159;
  }
  
  class x extends pi {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  // Get value of static property directly via child class
//   echo x::$value;
  
  // or get value of static property via xStatic() method
//   $x = new x();
//   echo $x->xStatic(); 
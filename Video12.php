<?php

/********************************
 * Classes
 * 
 * From PHP5, you can also write PHP code in an object-oriented style.
 * Object-Oriented programming is faster and easier to execute.
 * 
 */


/**
 * A class is defined by using the class keyword, followed by the name of the class
 *  and a pair of curly braces ({}). 
 * All its properties and methods go inside the braces:
 */



class Student
{
    //Note: In a class, variables are called properties and functions are called methods!

    // Properties
    public $id;
    public $name;



    // Methods

    function sayHello()
    {
      echo "Hello";
    }


    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name() 
    {
        return $this->name;
    }

    function set_id($id)
    {
        $this->id = $id;
    }

    function get_id()
    {
        return $this->id;
    }

}


//When the individual objects 
// (apple, banana, etc.) are created, 
// they inherit all the properties and behaviors from the class, 
// but each object will have different values for the properties.



//Define Objects

$stu1 = new Student();
$stu2 = new Student();


$stu1->set_name("Alireza");
$stu1->set_id(123456);

$stu2->set_name("Mehdi");
$stu2->set_id(98765);

// echo "Name: " . $stu1->get_name() . " ID: " . $stu1->get_id() . "\n";
// echo "Name: " . $stu2->get_name() . " ID: " . $stu2->get_id() . "\n";






// PHP - instanceof
// var_dump($stu1);

// if($stu1 instanceof Student)
// {
//     echo "STU1 is a Student\n";
// }





// /**
//  * 
// A constructor allows you to initialize an object's properties upon creation of the object.
// If you create a __construct() function, PHP will automatically call this function when 
// you create an object from a class.
// Notice that the construct function starts with two underscores (__)!
//  */

//  //As constructors and destructors helps reducing the amount of code, they are very useful!
// class Fruit 
// {
//     public $name;
//     public $color;
  
//     function __construct($name, $color)
//     {
//       $this->name = $name;
//       $this->color = $color;
//     }

//     // A destructor is called when the object is destructed or the script is stopped or exited.
//     function __destruct() 
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }

//     function get_name() {
//       return $this->name;
//     }
//     function get_color() {
//       return $this->color;
//     }

// }
  
//   $apple = new Fruit("Apple", "red");
//   echo $apple->get_name();
//   echo "\n";
//   echo $apple->get_color();




// //Properties and methods can have access modifiers which control where they can be accessed.

class Fruit 
{
    public $name;
    protected $color;
    private $weight;

      public function set_name($n) {  // a public function (default)
        $this->name = $n;
      }
      protected function set_color($n) { // a protected function
        $this->color = $n;
      }
      private function set_weight($n) { // a private function
        $this->weight = $n;
      }
  }
  
  $mango = new Fruit();
  $mango->name = 'Mango'; // OK
  $mango->color = 'Yellow'; // ERROR
  $mango->weight = '300'; // ERROR
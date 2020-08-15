<?php

// An iterable is any value which can be looped through with a foreach() loop.
// All arrays are iterables, 
// so any array can be used as an argument of a function that requires an iterable.

// function printIterable(iterable $myIterable) 
// {
//     foreach($myIterable as $item) 
//     {
//       echo $item . "\n";
//     }
// }
  
//   $test = 1;
//   $arr = ["a", "b", "c"];
//   printIterable($test);





// Create an Iterator
// class MyIterator implements Iterator 
// {
//     private $items = [];
//     private $pointer = 0;
  
//     public function __construct($items) {
//       // array_values() makes sure that the keys are numbers
//       $this->items = array_values($items);
//     }
  
//     public function current() {
//       return $this->items[$this->pointer];
//     }
  
//     public function key() {
//       return $this->pointer;
//     }
  
//     public function next() {
//       $this->pointer++;
//     }
  
//     public function rewind() {
//       $this->pointer = 0;
//     }
  
//     public function valid() {
//       // count() indicates how many items are in the list
//       return $this->pointer < count($this->items);
//     }
//   }
  
  // A function that uses iterables
//   function printIterable(iterable $myIterable) {
//     foreach($myIterable as $item) {
//       echo $item . "\n";
//     }
//   }
  
  // Use the iterator as an iterable
//   $iterator = new MyIterator(["a", "b", "c"]);
//   $iterator = new MyIterator(["a"=>"ahmad", "b"=>"ali", "c"=>"reza"]);
//   printIterable($iterator);
<?php
namespace Html;

class Table 
{
    public $title = "";
    public $numRows = 0;
    public function message() {
      echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}

?>
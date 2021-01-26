<?php

class Fruits {

    var $name;

    function set_name($text) {
         $this->name = $text;
  }

    function get_name() {
         echo $this->name;
  }

}

$fruits = new Fruits;
$fruits->set_name('orange');
$fruits->get_name();

 ?>

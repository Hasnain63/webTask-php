<?php 

class Person {
	// Add a constructor to this class that should recieve a paramter $message and assign it to $message property of class
	public $message;

	public function __construct($m){
		$this -> message = $m;
	}
	function say_hello() {
		echo $this->message;
	}
}

$person1 = new Person("UD ");
$person2 = new Person("mike");

$person1 -> say_hello();
$person2 -> say_hello();


// Create Two objects of class Person. 

?>
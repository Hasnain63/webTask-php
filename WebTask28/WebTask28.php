<?php

class Person
{
	// Pass a new parameter with the name of $message
	public function person()
	{
		// $this->person();
	}
	function say_hello($message)
	{
		echo $message;
		echo "Hello World";
	}
}
$obj1 = new Person();
$hello = "Hello From Class";
$hw = "Hello  from the class";
$obj1->say_hello($hw);

// Create an object of class and call say_hello function with a message e.g "Hello From Class"
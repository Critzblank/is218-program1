<?php
	//this is how you print text in php
	echo 'hello world';
	//this is how you store a value in a variable
	$myvar = 'some Text I want to store in a variable';
	
	//this is an example between single quotes and double quotes
	echo '<br>';
	echo '$myvar';
	echo '<br>';
	echo "$myvar";

	//this is an example of php arrays

	$myarray = array();
	
	//this is how you add value
	$myarray[] = 'some value 1';
	$myarray[] = 'some value 2';
	$myarray[] = 'some value 3';

	print_r($myarray);
	
	//this is an example of an associated array and an embedded array
	$myAssoc = array('value 1' => $myarray, 'value 2' => $myarray);
	
	print_r($myAssoc);
	
	//this is how you print out a specific key value
	print_r($myAssoc['value 1']);

	//this is how you define a class
	class myclass {
		public $myPublic;
		private $myPrivate;
		protected $myProtected;

		public function __construct() {
			
			//$this is the internal reference to an object within the class,  the arrow points to a property or 
			//method being accessed within the obect

			$this->myPublic = 1;
			$this->myPrivate = 2;
			$this->myPrivate =3;
			
			//this is how you call a method within an object and pass it a variable
			$this->sayHello('Jan');

	                                    }
			public function sayHello($name) {

			echo 'Hello ' . $name . '<br>';

                      }  
	}

	//this is how you extentiate a new class object
	$obj = new myclass;
	
	print_r($obj);


?>


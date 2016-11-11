<?php
	// this file will extend PArentClass.php

	class Dog extends Pet {
    //Fields
    public breed;
    public age;

		//Constructor
    public function __construct($name, $breed, $age) {
			$parent::name = name;
			$parent::species = "Dog";
			$this->breed = $breed;
			$this->age = $age;
	  }

		//Methods
		function speak() {
			return "Bark!"
		}
		public function __toString() {
 		   return "\n\tThis is " . $parent::name . ".\n\t He is" . $parent::qual1."\n\t and he is ".$parent::qual2.".\n";
 	   }
	}

<?php
	// this file will extend PArentClass.php

	class Dog extends Pet {
    //Fields
    public $breed;
    public $age;

		//Constructor
    public function __construct($name, $breed, $age) {
      $names = array("Mr. Pet", "Goodboy", "Petster", "Sir Pet-er Petston", "Sgt. Petter");
      $qualities = array("Playful", "Lazy", "Lethargic", "Happy", "Timid", "Slow", "Quick", "Grumpy", "Energetic", "Shy", "Big", "Small", "Tiny", "Friendly", "Old", "Vocal");
      $this->species = "Dog";
			$this->name = $name;
			$this->species = "Dog";
			$this->breed = $breed;
			$this->age = $age;
      $this->quality1 = $qualities[mt_rand(0, 15)];
      $this->quality2 = $qualities[mt_rand(0, 15)];
	  }

		//Methods
		function speak() {
			return "~Bark!~";
		}

		public function __toString() {
 		   return "This is " . $this->getName() . ".\n\t He is " . $this->getQual1()."\n\t and he is ".$this->getQual2().".";
 	   }
	}

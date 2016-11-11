<?php
	// This is the file for the parent class
	class Pet {
    //Fields
		protected $species;
		protected $name;
    protected $quality1;
    protected $quality2;

    //Constructor
    public function __construct() {
      $specieseses = array("Cat", "Fish", "Hamster", "Rabbit", "Snake", "Frog", "Ferret", "Gerbil", "Lizard", "Tarantula", "Horse", "Dragon", "Unicorn", "Manbearpig");
      $names = array("Mr. Pet", "Goodboy", "Petster", "Sir Pet-er Petston", "Sgt. Petter");
      $qualities = array("Playful", "Lazy", "Lethargic", "Happy", "Timid", "Slow", "Grumpy", "Energetic", "Shy", "Big", "Small", "Tiny", "Friendly", "Old", "Vocal");
      $this->species = $specieseses[rand(0, 13)];
      $this->name = $names[rand(0, 4)];
      $this->quality1 = $qualities[mt_rand(0, 15)];
      $this->quality2 = $qualities[mt_rand(0, 15)];
		}

    //Methods
		public function getSpecies() {
	    return $this->species;
	  }
    public function getName() {
	    return $this->name;
	  }
    public function getQual1() {
 	    return $this->quality1;
 	  }
    public function getQual2() {
 	    return $this->quality2;
 	  }
    public function setName($newName) {
	    $this->name = $newName;
	  }
    public function swapName($newName) {
      $oldName = $this->name;
      $this->name = $newName;
      return $oldName;
    }
    public function __toString() {
 		   return "<p>This is " . $this->getName() . ".\n\t He is " . $this->getQual1()."\n\t and he is ".$this->getQual2().".</p>";
 	   }
	}

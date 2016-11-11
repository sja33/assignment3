<?php
	// This is the file for the parent class
	class Pet {
    //Fields
		private $specieseses = array("Cat", "Fish", "Hamster", "Rabbit", "Snake", "Frog", "Ferret", "Gerbil", "Lizard", "Tarantula", "Horse", "Dragon", "Unicorn", "Manbearpig");
		private $names = array("Mr. Pet", "Goodboy", "Petster", "Sir Pet-er Petston", "Sgt. Petter");
    private $qualities = array("Playful", "Lazy", "Lethargic", "Happy", "Timid", "Slow", "Quick", "Grumpy", "Energetic", "Shy", "Big", "Small", "Tiny", "Friendly", "Old", "Vocal");
		protected $species;
		protected $name;
    protected $quality1;
    protected $quality2;

    //Constructor
    public function __construct() {
			$this->species = $specieseses[rand(0, 13)]
      $this->name = $name[rand(0, 4)];
      $this->quality1 = $qualities[rand(0, 15)];
      $this->quality1 = $qualities[rand(0, 15)];
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
 	    return $this->quality1;
 	  }
    public function setName($newName) {
	    $this->name = $newName;
	  }
    public function swapName($newName) {
      $oldName = $this->name;
      $this->name = $newName;
      return $oldName;
    }
	}

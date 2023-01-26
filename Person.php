<?php
	class Person{
		var $age;
		var $eye_color;
		var $name;

		public $one;
		private $two = 3;
		protected $three = 3;
		
		private $word;

		public static $population = 0;
		public static $people = 20;
		public static $haha = 55;

		public function __set($name, $value)
		{
			$this->$name = $value;
		}

		public function __get($name)
		{
			return $this->name;
		}
		
		public function __construct($age, $eye_color){
			$this->age = $age;
			$this->eye_color = $eye_color;
			echo "This is the age: " . $this->age . "<br/>";
			echo "This is the eye color: " . $this->eye_color . "<br/>"; 
			self::$population++;
			echo "This is the current number of instance: " . self::$population;
		}

		static public function say_population(){
			echo "This is the population: " . self::$population;
		}

		function sayNums(){
			echo $this->one;
			echo $this->two;
			echo $this->three;
		}

		function say_age(){
			echo "This is the age: " . $this->age;
		}
	}

	$dude = new Person(22,"Brown");
	$girl = new Person(44,"Blue");
	$bob = new Person(55,"Green");

	Person::$haha = 55;

	echo '<br />';
	$dude->word;
	$dude->one  = 101;
	$dude->two  = 102;
	$dude->three  = 103;
	$dude->age = 2021;
	$dude->say_age();
	$dude->haha = 12;
	$dude->population = 3;
	$dude->say_population();
	$dude->population = 11;
	$dude->say_population();
	echo $dude->haha;

	echo '<br />';
	$girl->word;
	$girl->one  = 2323;
	$girl->two  = 5454;
	$girl->three  = 1113;
	$girl->age = 2002;
	$girl->say_age();
	$girl->haha = 12;
	$girl->population = 11;
	$girl->say_population();
	echo $girl->haha;

	echo '<br />';
	$bob->word;
	$bob->one  = 111;
	$bob->two  = 121;
	$bob->three  = 224;
	$bob->age = 1213;
	$bob->say_age();
	$bob->haha = 12;
	$bob->population = 4;
	$bob->say_population();
	echo $bob->haha;
?>
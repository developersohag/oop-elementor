<?php



class Lession_one{
	public $name;
	public function show_valu(){
		return $this->name;
	}
	public function set_valu($valu){
		$this->name = $valu;
	}

}

$object = new Lession_one;
$object -> set_valu("MY name is sohag");
echo $object -> show_valu();

echo "<hr/>";
echo "<br/>";


/*
Lesstion :4
============
Static
class constants
self
scope resolution operator (::)
1. static key word ta bose access modifay er Pore--> Property O method...
2.. This er Poriborto self key word hobe . -> er poriborto :: hobe
3.. objet na banalao hoy sorasoty Class name::Propety $ soho deya echo korta hobe
4. echo method k korla hobe na echo korla proparti k korta hobe
*/





/// Static er bobohar
echo "static";
echo "<br/>";

class Lession_two{
	public static $name;
	public function showing_data(){
		return self::$name = $name;
	}

	public function pussing_data($name){
		self::$name = $name;
	}
}

$man = new Lession_two;
$man->pussing_data("static Key Word");
echo Lession_two::$name;
echo "<br/>";
echo $man::$name;





/*
abar amar jodi mothed er static de tahole amar objet na kora sorasory
Class name::Method name(); Deta pari..
*/
echo "<hr/>";
echo "<br/>";
echo "constan";
echo "<br/>";

class constants{
	const Name= "2323";
}

echo constants::Name;

/*constant er mane change hoy na tay object korar dorkar na.
clss name :: const name e kaj hoy*/
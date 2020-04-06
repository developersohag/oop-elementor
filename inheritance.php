<?php
//inheritance- mane holo over right
/*
Je kono 1 ta libray k copy kora amar extends kora kaj korta pari.. Orthat mul kota holo sy main libray mul code e hat na deya say libray e new text patano hoy
*/

class Elemntor {
	public $name;
	public $version;
	public function __construct($pname, $var){
	echo	$this->name = $pname;
	echo	$this->version = $var;
	}
	public function init(){
		echo "All The assets will be loaded here";
	}
	public function widget(){
		echo "all the widgets will be registered here";
	}
}

class My_wedget extends Elemntor{
	public function child_widget(){
		parent::widget("This is parant widget");
		echo "<br/>";
		echo "Overwrited parent widget";
	}
}

$paren_objet = new Elemntor("Old version", "0.1");
echo "<br/>";
$child_wid = new My_wedget("New version" , "0.2");
echo "<br/>";
$child_wid-> init();
$child_wid-> child_widget();


<?php
//interface
//proparti nay
// Only contain abstract method, constant--> mane holo public and contstant method chara R kono kisu hoy na
// every methods must be public
//you can only define the method but can't declare

// onke gula interface toyre kota jay . jar modda method thake kintu say method er body daya jabe na.. 
// interface er medhod k body debar jonno say interface er chide class nita hobe sey chide class k (implements) deya add kota hoy.

// abar say chide class er modda interface er method k neya tar modda body  deya jay

// Abar chiled class er object baniya echo kora jabe


interface test_one{	

	public function hello();
}


interface test_two{
	public function welcome();
}

class Chield_test implements test_one, test_two{

	public function hello(){
		return "Hello interface";
	}
	public function welcome(){
		return "welcome interface";
	}
}

$boject = new Chield_test;

$hello=$boject -> hello();

echo $hello;
echo "<hr/>";
echo $welcome=$boject -> welcome();;
echo "<hr/>";
//---------------------------------------------
/*
Abstract Class
abstract class er sorto...
1. class er age abstract likta hobe
2. Minimum 1ta abstract method thaktae hobe body chara. jsut privet not allow
3.we can't instantiate->mane(object) abstruct class.
4. we can define and delclare method
5. Interface er modda amar static and contstant method use korta partam na but abstract e parob
6. Abustract method k (extends) deya chield korta hobe
R chiel class er vetora mane class er abstarct method ta deta hobe toaba public access deta hobe abon body deya kaj kora ay // toba protedted korta parbo jodi constart typer kisu hoy
7. chield class er object banata parbo.....

*/

abstract class Ab_class{
	public function __contstruct(){
		echo "Hello parent abstract";
	}
	public static function welcome(){
		echo "welcome to abstract class";
	}
	abstract protected function abhello();

}

class Inherit_abstact extends Ab_class {
	 protected function abhello(){
		echo "hello world";
}

}


$iob = new Inherit_abstact;

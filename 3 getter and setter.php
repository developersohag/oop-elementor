<?php
/*
Lesstion :3
============
Getter() and setter();
pseduo variable $this
understanding access modifier
1..Er mane holo 1 ta mehod er modda valu pass korbo R OY value ta onno funtion er modda dya anbo
2.. propartis er age jako ak ta access modify lagbe.. access modify na deya jodi amara object bangay tahola Errro hobe..

3.. kono method er aga jodi modiya na de tahola default vabe public thake.
*/


class Lession_Two{
	public $name;
	public function show_valu(){
		return $this->name;
	}
	public function set_valu($valu){
		$this->name = $valu;
	}

}

$object = new Lession_Two;
$object -> set_valu("MY name is sohag");
echo $object -> show_valu();

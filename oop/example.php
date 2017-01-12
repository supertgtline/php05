<?php 
//class
class human
{	
	// properties
	var $hand = "hand";
	var $eye = "eye";
	//method
	public function step($hand){
		echo "$hand";
	}
	private function step1($ex1){
		echo "$ex1";
	}
	static function step2($ex2){
		echo "$ex2";
	}
	
}

$ex = new human;
echo $ex->step("hand");
// echo $ex->step1("test1");
echo $ex->step2("test2");
?>
<?php



/*


- function là Interface ko chứa code bên trong
- ko thể khởi tạo bằng new

Interface

- public
- không có bất kì pt nào chứa code bên trong
- không có thuộc tính


*/


Interface abc{
	function a();
	function b();
	function c();
}

Interface xy{

	function x();
	function y();

}
Interface x{

	function x();

}






class test implements xy,abc,x{

	// function x($x){
	// 	echo "$x";
	// }

	function x(){
		echo "x";
	}

	function y(){
		echo "y";
	}

	function a(){
		echo "x";
	}

	function b(){
		echo "y";
	}

	function c(){
		echo "y";
	}

}

$t = new test;
$t->x(123423);

?>
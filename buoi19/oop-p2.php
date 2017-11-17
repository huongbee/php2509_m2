<?php


abstract class SinhVien{


	public $name = 'Hoa';

	abstract function __construct($name);

	protected abstract function getName($name); //khoong định nghĩa bên trong

	function returnName(){ // phải có định nghĩa bên trong
		echo 1212;
	}
}



class SV extends SinhVien{

	function __construct($name){
		echo $name;
	}


	function getName($name){
		return $name;
	}

	// function returnName(){
	// 	return "Lan";
	// }
}


// $sv = new SV(1212113);
// echo $sv->getName('<br>Hoa');
//echo $sv->returnName();


// interface HocSinh{


// 	function getName($name);

// 	function getAge($age);


// 	function returnValue();

// }

// class HS implements HocSinh{
// 	function getName($name){
// 		return $name;
// 	}

// 	function getAge($age){
// 		return $age;
// 	}
// }


// $hs = new HS;
// echo $hs->getName('vdf');



/*

- function là Abstract ko chứa code bên trong
- ko thể khởi tạo bằng new
//Abstract


- public/protected
- có thể có phương thức có chứa code bên trong
- co thể có thuộc tính

*/

?>
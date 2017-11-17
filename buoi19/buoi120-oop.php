<?php

class SinhVien{

	public static $name = "Tên SV";
	public $age;

	public static function setName($ten){
		SinhVien::$name = $ten;
		//$this->name = $ten;//sai
	}
	public static function getName(){
		return self::$name;
	}

	public function setAge($tuoi){
		$this->age = $tuoi;
	}
	public function getAge(){
		return $this->age;
	}

	public function getValue(){
		return $this->getName();
	}
}


class HocSinh extends SinhVien{

	public static $name = "Tên HS";

	const ID = "DH123456"; //không thể thay đổi giá trị

	public function setID($id){
		//HocSinh::ID = $id; //sai
	}


	public static function getNameHS(){
		//return $this->name; //sai
		return HocSinh::$name;
	}

	public static function getNameSV(){
		//return $this->name; //sai
		return SinhVien::$name;
	}
}

$sv = new HocSinh;
/*$sv->setAge(20);
echo $sv->getAge();*/
//echo $hs->name;

//$sv->setName("Lan");
echo $sv->getNameHS();

echo "<br>";
echo $sv->getNameSV();

echo "<br>";
echo $sv::ID;

/*
	//echo $sv->name;//sai '->'
	//C1
	//$sv = new SinhVien;
	//echo $sv::$name;

	//C2
	// echo SinhVien::$name;
	// echo "<br>";

	// SinhVien::setName('Khoa Phạm');
	// echo SinhVien::$name;

	// echo "<br>";
	// SinhVien::setName('Bạn A');
	// echo SinhVien::$name;
*/
/*
	$sv = new SinhVien;
	echo $sv::$name; //Nam

	echo "<br>";
	$sv::setName("Lan 2"); 
	echo $sv::$name; //Lan


	echo "<hr>";
	//echo "<br>";
	$sv2 = new SinhVien;

	echo $sv2::$name; //
	echo "<br>";

	echo $sv2::getName();
	echo "<br>";

	$sv2::setName("Mai");
	echo $sv2::getName();
*/

?>
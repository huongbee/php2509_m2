<?php

/*class sinhvien{

	public $mssv = 1015; //thuộc tính (property) MSSV
	private $name = "Tên Sinh Viên";

	function setMSSV($maSo){ //phương thức gán giá trị cho MSSV		
		$this->mssv = $maSo;
	}

	function setName($ten){ //phương thức gán giá trị cho name		
		$this->name = $ten;
	}

	public function getName(){ //phương thức lấy giá trị cho name	
		return $this->name;
	}
}



$sv = new sinhvien;
$sv->setMSSV(1000);
echo $sv->mssv;
// --------------------------------
echo "<br>";
$sv->setName("Khoa Phạm");
echo $sv->getName();
//echo $sv->name;

echo "<br>";

$sv2 = new sinhvien;
$sv2->setMSSV(2000);

echo $sv2->mssv;

//var_dump($sv);*/



/*
	class sinhvien{

		public $mssv = 1015; //thuộc tính (property) MSSV
		private $name = "Tên Sinh Viên";
		protected $tuoi;

		function setMSSV($maSo){ //phương thức gán giá trị cho MSSV		
			$this->mssv = $maSo;
		}

		function setName($ten){ //phương thức gán giá trị cho name		
			$this->name = $ten;
		}

		protected function getName(){ //phương thức lấy giá trị cho name	
			return $this->name;
		}
	}

	class hocsinh extends sinhvien{
		
		public $tuoi = 20;

		function setAge($age){
			$this->tuoi = $age;
		}
		public function getAge(){
			return $this->tuoi;
		}

		function setName($ten){ //phương thức gán giá trị cho name		
			$this->name = "Tên của bạn là: ".$ten;
		}

		public function getName(){ //phương thức lấy giá trị cho name	
			return $this->name;
		}
	}
	$hs = new hocsinh;

	echo $hs->mssv;
	echo "<br>";

	$hs->setAge(15);
	echo $hs->getAge();

	echo "<br>";
	echo $hs->tuoi;

	echo "<br>";
	$hs->setName("Khoa Phạm");
	echo $hs->getName();

	// echo "<br>";
	// echo $hs->name;

*/

class sinhvien{

	public $mssv = 1015; //thuộc tính (property) MSSV
	private $name = "Tên Sinh Viên";
	protected $tuoi;

	// public function __construct($ten){ //phương thức gán giá trị cho name		
	// 	$this->name = $ten;
	// }
	public function sinhvien($ten){ //phương thức gán giá trị cho name		
		$this->name = $ten;

		echo "Bạn $ten vừa được gọi";
		echo "<br>";
	}

	function setMSSV($maSo){ //phương thức gán giá trị cho MSSV		
		$this->mssv = $maSo;
	}

	function setName($ten){ //phương thức gán giá trị cho name		
		$this->name = $ten;
	}

	public function getName(){ //phương thức lấy giá trị cho name	
		return $this->name;
	}
	
	public function __destruct(){ //phương thức hủy	
		echo $this->name." đã bị hủy";
	}
}

// $sv = new sinhvien("Khoa Phạm Training");
// //$sv->setName("Bạn A");

// echo $sv->getName();

// echo "<br>";
//$sv->__construct("Bạn B");


class hocvien{
	private $name;
	private $age;
	private $birthdate;

	function __construct($ten,$tuoi,$sinhnhat){
		$this->name= $ten;
		$this->age= $tuoi;
		$this->birthdate = $sinhnhat;
	}
	

	public function getInfo(){
		return [
			'name'		=> $this->name,
			'age'		=> $this->age,
			'birthdate'	=> $this->birthdate
		];
	}
}

$hv = new hocvien("Hoa", 6, "12/5/2017");

$thongtin = $hv->getInfo();

echo "<pre>";
print_r($thongtin);
echo "</pre>";


$hv2 = new hocvien("Khoa Phạm", 3, "10/8/2017");

$thongtin = $hv2->getInfo();

echo "<pre>";
print_r($thongtin);
echo "</pre>";
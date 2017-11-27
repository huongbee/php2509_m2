<?php

class DBConnect{

	public $sql;
	public $connect = null;
	public $statement;

	public function __construct(){
		try{
		    $dbh = new PDO('mysql:host=localhost;dbname=php2509_banhang', "root", "123456"); 
		    $dbh->exec("set names utf8"); 
		    $this->connect = $dbh;
		}
		catch(PDOException $e){
		    echo "Lỗi";
		    echo $e->getMessage();
		}
	//	return $dbh;
	}

	public function setQuery($query){
		$this->sql = $query;
	}

	public function setStatement($param=array()){
		$stmt = $this->connect->prepare($this->sql);
		//$stmt = $dbh->prepare($sql);
		if(!empty($param)){

			$number = count($param); //4   array('12', '16',5, 500000)
			for($i=1; $i <= $number; $i++){
				$stmt->bindParam($i,$param[$i-1]);
			}
		}
		//$this->statement = $stmt->execute();
		return $stmt;
	}

	//TH1: insert/update/delete
	public function executeQuery($query,$param=array()){
		$this->setQuery($query);
		$stmt = $this->setStatement($param);
		$result = $stmt->execute();
		return $result;

	}
	//TH2: SELECT 1

	public function loadOneRow($query,$param=array()){
		$this->setQuery($query);
		$stmt = $this->setStatement($param);
		$check = $stmt->execute();
		if($check){
			return $stmt->fetch(PDO::FETCH_OBJ);
		}
		else{
			return false;
		}
	}

	public function loadMoreRows($query,$param=array()){
		$this->setQuery($query);
		$stmt = $this->setStatement($param);
		$check = $stmt->execute();
		if($check){
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}
		else{
			return false;
		}
	}


}


$db = new DBConnect; //connect
// $sql = "INSERT INTO bill_detail(id_bill,id_food,quantity, price) VALUES(?,?,?,?)";
// $db->setQuery($sql);
// $param = array(10,15,4,10000);
// $db->setStatement($param);

//$sql = "DELETE FROM bill_detail WHERE id=15";
// $db->setQuery($sql);
// $db->setStatement();
// $r = $db->executeQuery();

//$r = $db->executeQuery($sql);


// $sql = "UPDATE bill_detail SET quantity=? WHERE id=?";
// $param = array(2,14);

// $r = $db->executeQuery($sql,$param);

$sql = "SELECT * FROM food_type WHERE id=5";
//$param = array(1);
$r = $db->loadOneRow($sql);

print_r($r);
?>
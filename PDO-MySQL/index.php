<?php

try{
    $dbh = new PDO('mysql:host=localhost;dbname=php2509_banhang', "root", "123456"); 
    $dbh->exec("set names utf8"); 

   // $sql = "DELETE FROM bill_detail WHERE id>=16"; //2
    //$sql = "SELECT * FROM bill_detail"; //0
    //$sql = "UPDATE bill_details SET price=50000"; //false:vì câu sql sai
    //$result = $dbh->exec($sql);


    //$sql = "SELECT * FROM bill_detail";
    // $result = $dbh->query($sql); //obj

    // $stmt = $dbh->prepare($sql);
    // $check = $stmt->execute(); //true

    //if($check){
        //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);//array tên cột
        //$result = $stmt->fetchAll(PDO::FETCH_NUM); //array number
        //$result = $stmt->fetchAll(PDO::FETCH_OBJ); //obj tên cột
       // $result = $stmt->fetchAll(PDO::FETCH_CLASS); //obj tên cột
       //$result = $stmt->fetchAll(PDO::FETCH_UNIQUE); //array tên cột và number
       //$result = $stmt->fetchAll(PDO::FETCH_BOTH);
       //$result = $stmt->fetchObject();
      // $result = $stmt->fetch();

    //    while($row = $stmt->fetchObject() ){
    //         echo "<pre>";
    //         print_r($row);
    //         echo "</pre>";
    //    }


        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
       // echo $result[0]['id_bill'];
        //echo $result[0][1];
        //echo $result[0]->id_bill;
    // }
    // else{
    //     echo "Lỗi thực thi query ";
    // }


    //$sql = "SELECT * FROM food_type WHERE name=?";
   // $stmt->bindParam(1,$name);
    $sql = "SELECT * FROM food_type WHERE name=:tenloai OR id=:maSP";
    $name = "Bào ngư";
    $id = 8;
    
    $stmt = $dbh->prepare($sql);

   $stmt->bindParam(':tenloai',$name);
   $stmt->bindParam(':maSP',$id);
    
    $check = $stmt->execute(); //true

    if($check){
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
    else{
        echo "Lỗi thực thi query ";
    }





}
catch(PDOException $e){
    echo "Lỗi";
    echo $e->getMessage();
}

?>
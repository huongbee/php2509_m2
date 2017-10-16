<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bài 8</title>
</head>
<body>
    <?php
        echo $str = "hello world!";
        echo "<br>";
        echo "hello world!";
        echo "<br>";
        $so_a = 7.5;
        $so_b = 3;
        // Tổng hai số 0 và 3 là: 3
        echo "Tổng hai số $so_a và $so_b là:".($so_a+$so_b);
        echo "<br>";
        echo 'Tổng hai số $so_a và $so_b là:'.($so_a+$so_b);
        echo "<br>";
        printf("chào bạn");
        echo "<br>";
        echo gettype($so_a);
        /*
        fd*/
        echo "<br>";
        echo "<hr>";

        $bool = false;
        var_dump($bool);

        //c1
        //$arr = array('PHP','iOS','Android','NodeJS');

        //c2
        $arr = ['PHP','iOS','Android','NodeJS'];
        //var_dump($arr);
        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        echo $arr[2];
        echo "<br>";

        $json = json_encode($arr); //từ array->json
        echo $json;
        echo "<br>";
        $arr2 = json_decode($json); //từ json->array
        
        //object
        class So{

            function inSo(){
                echo 24;
            }
            function inSo_2($number){
                echo $number;
            }
        }

        $obj = new So; //$obj: object
        $obj->inSo();

        echo "<br>";
        $obj->inSo_2(1201);

        echo "<br>";
        var_dump($obj);




    ?>
    <br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
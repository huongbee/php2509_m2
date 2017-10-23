<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.container{
    width:800px;
    margin:0 auto;
}
.o_co{
    width:100px;
    height:100px;
    float:left
}
.den{
    background-color:black
}
</style>
<body>
    <div class="container">
        <?php
        $class ="den";
        for($i = 1; $i<=8; $i++){

            for($j=1;$j<=8; $j++){

                if(($i+$j)%2==0){
                    $class = "trang";
                }
                else {
                    $class = "den";
                }
                echo "<div class='o_co $class'></div>";
            }       
        }
        ?>
        
    </div>
</body>
</html>
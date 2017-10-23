<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<?php


$mangsp = array(
    array(
        "TenSP" =>"iPhone X",
        "Hinh"  =>"https://cdn.tgdd.vn/Products/Images/42/93709/iphone-7-plus-red-128gb-400x460.png",
        "Gia"   =>30000000,
        'link'  =>'https://www.thegioididong.com/dtdd/samsung-galaxy-j7-plus'
    ),
    array(
        "TenSP" =>"iPhone 6",
        "Hinh"  =>"https://cdn.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-de-400x460.png",
        "Gia"   =>40000000,
        'link'  =>'https://www.thegioididong.com/dtdd/samsung-galaxy-s8'
    ),
    array(
        "TenSP" =>"iPhone 7",
        "Hinh"  =>"https://cdn.tgdd.vn/Products/Images/42/73703/iphone-6s-128gb-hong-1-400x450.png",
        "Gia"   =>50000000,
        'link'  =>'https://www.thegioididong.com/dtdd/samsung-galaxy-s8'
    ),
    array(
        "TenSP" =>"iPhone 8",
        "Hinh"  =>"https://cdn.tgdd.vn/Products/Images/42/113126/sony-xperia-xz-premium-pink-gold-400x460.png",
        "Gia"   =>60000000,
        'link'  =>'https://www.thegioididong.com/dtdd/samsung-galaxy-s8'
    ),
    array(
        "TenSP" =>"iPhone 9",
        "Hinh"  =>"https://cdn.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-de-400x460.png",
        "Gia"   =>70000000,
        'link'  =>'https://www.thegioididong.com/dtdd/samsung-galaxy-j7-plus'
    ),
    array(
        "TenSP" =>"iPhone X",
        "Hinh"  =>"https://cdn.tgdd.vn/Products/Images/42/103241/htc-u11-1-400x460.png",
        "Gia"   =>80000000,
        'link'  =>'https://www.thegioididong.com/dtdd/samsung-galaxy-s8'
    )
);





?>

<body>
    <div class="container">
        <?php
        foreach($mangsp as $sanpham):
        ?>
        <div class="sanpham">
            <div class="hinh">
                <a href="<?=$sanpham['link']?>">
                    <img src="<?=$sanpham['Hinh']?>" alt="<?= $sanpham['TenSP']?>">
                </a>
            </div>
            <div class="thongtin">
                <h2><?= $sanpham['TenSP']?></h2>
                <p>Trong hộp có: Sạc, Tai nghe</p>
                <p>Trong hộp có: Sạc, Tai nghe</p>
                <p>Khuyến mãi:</p>
                <p>Trong hộp có: Sạc, Tai nghe</p>
                <p>Trong hộp có: Sạc, Tai nghe</p>
            </div>
            <div class="tensp"><?php echo $sanpham['TenSP']?></div>
            <div class="giasp"><?= $sanpham['Gia']?>đ</div>
        </div>
        <?php endforeach ?>
    </div>

</body>
</html>
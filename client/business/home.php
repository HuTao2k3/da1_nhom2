<?php

function home($number){
    $sql = "SELECT * FROM `products` ORDER BY view DESC LIMIT $number";
    $products = pdo_query($sql);
    // dd($products);
    /*hàm compact chuyển biến thành key(thành giá trị value trong 1 mảng)*/
    clientRender('home/index.php',compact('products'));
}

?>
<?php

function home($number){
    $sql = "SELECT * FROM `products` ORDER BY view DESC LIMIT $number";
    $products = pdo_query($sql);
    // dd($products);
    /*hàm compact chuyển biến thành key(thành giá trị value trong 1 mảng)*/
    clientRender('home/index.php',compact('products'));
}
function favourite() {
    $id = $_GET['id'];
    $userId = $_SESSION['user']['id'];
 
    //kiểm tra sản phẩm đã được thêm vào yêu thích hay chưa 
    $sql = "SELECT * FROM favorite WHERE `user_id`=$userId AND `product_id`=$id";
    $favourite = pdo_query($sql);

    if(!$favourite){
    $time = date("Y-m-d h:i:s");
    $sql = "INSERT INTO favorite (`user_id`, `product_id`, `created_at`) VALUES ($userId,$id, '$time')";
    // dd($sql);
    pdo_execute($sql);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
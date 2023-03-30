<?php
function add2Cart(){
    $pId = $_GET['id'];
    // lấy thông tin sản phẩm
    $getProductByIdQuery = "SELECT * FROM products where id = $pId";
    $product = pdo_query_one($getProductByIdQuery);
    if(!$product){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    // kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
    $existedIndex = -1;
    foreach ($cart as $index => $item) {
        if($item['id'] == $product['id']){
            $existedIndex = $index;
            break;
        }
    }
    // nếu có rồi thì cộng thêm 1 đơn vị vào quantity
    if($existedIndex != -1){
        $cart[$existedIndex]['quantity']++;
    }else{
        // nếu chưa có thì thêm vào giỏ với quanity mặc định = 1
        $product['quantity'] = 1;
        $cart[] = $product;
    }
    $_SESSION['cart'] = $cart;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
}
?>
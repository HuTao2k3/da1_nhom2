<?php
//thêm sản phẩm vào giỏ hàng
function add2Cart(){
    $pId = $_GET['id'];
    // lấy thông tin sản phẩm
    $getProductByIdQuery = "SELECT * FROM `products` WHERE id = $pId";
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
function checkOut(){
    if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
        header('location:' . BASE_URL );
    }
    $cart = $_SESSION['cart'];
    clientRender('cart/cart.php',compact('cart'));
}
function payCart(){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    // $created_at = $updated_at = date('Y-m-d H:s:i');
    //insert dữ liệu tạo hóa đơn
    $createInvoiceQuery = "INSERT INTO `invoices` (customer_name,customer_phone_number,customer_email,customer_address,note) VALUES ('$name',$phone,'$email','$address','$note')";
    $invoiceId = insertDataAndGetId($createInvoiceQuery);
    //chạy vòng lặp qua các phần tử của giỏ hàng , sau đó insert dữ liệu vào bảng invoices_detail 
    foreach($_SESSION['cart'] as $item){
        $productId = $item['id'];
        $price = $item['price'];
        $quantity = $item['quantity'];
        $totalPrice += $price*$quantity;
        $inserInvoiceDetailQuery = "INSERT INTO `invoices_detail` (invoice_id,product_id,quantity,unti_price) VALUES ($invoiceId,$productId,$quantity, $price)"; 
        pdo_execute($inserInvoiceDetailQuery);
    }
    //Cập nhật tổng tiền hóa đơn
    $updateTotalPrice = "UPDATE `invoices` SET total_price = $totalPrice WHERE id=$invoiceId";
    pdo_execute($updateTotalPrice);
    unset($_SESSION['cart']);
    header('location:' . BASE_URL);
}
function formCheckOut(){
    clientRender('cart/checkout.php');
}
?>
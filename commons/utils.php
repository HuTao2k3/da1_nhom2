<?php
const BASE_URL = 'http://localhost/da1_nhom2/';
const ADMIN_URL = BASE_URL . 'web-management/';
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const PUBLIC_URL = BASE_URL . 'public/';
const USER_ASSET = BASE_URL . 'public/user-assets/';
//dùng để var_dump;
function dd(){
    $data = func_get_args();
    echo "<pre>";
    foreach($data as $item){
        var_dump($item);
    }
    echo "</pre>";
    die;
}
//dùng để render dữ liệu và nối đường dẫn
function clientRender($view, $data=[])
{
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}
function adminRender($view, $data = [], $jsfile = null){
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}
function getFvrProduct() {
    if(!$_SESSION['user'] || $_SESSION['user'] == null){
      return false;
    }
    $userId = $_SESSION['user']['id'];
    $sql = "SELECT * FROM favorite WHERE `user_id`= $userId";
    $fvrProduct = pdo_query($sql);
    // dd($userId);
    return $fvrProduct;
}
?>
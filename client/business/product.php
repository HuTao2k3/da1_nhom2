<?php
function loadAllProduct()
{
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
    /* Executing the query and returning the results as an array. */
        $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$keyword%'";      
        $products = pdo_query($sql);
        // hiển thị view
        clientRender('product/index.php',compact('products','keyword'));
}
function getCateDetail()
{
   $id = $_GET['id'];
   $sql = "SELECT * FROM `category` WHERE id=$id";
   $cate = pdo_query_one($sql);
 }
function detailProduct(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM products where id=$id";
        $pro = pdo_query_one($sql);
        // dd($pro);
        $cate = getCateDetail();
        clientRender('product/detail.php',compact('pro','cate'));
}
?>
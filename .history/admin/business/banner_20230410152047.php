<?php
function bannerIndex(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
    $sql = "SELECT * FROM `banner` WHERE id LIKE '%$keyword%'";
    $listbanner = pdo_query($sql);
     adminRender('banner/index.php',compact('listbanner','keyword'),'admin-assets/custom/script.js');
}
function updateBanner()
{
   $image = $_POST['image'];
   if(empty($_FILES["new-image"]["name"])){ //kiểm tra xem có chọn ảnh hay không bằng cách check key "name" có trả về chuỗi rỗng hay không
    $productImage = $_POST["old-image"];//nếu "name" trả về rỗng thì thực hiện lấy tên ảnh cũ từ $_POST theo key "old-image" để gán cho biến $productImage
     }else{ //ngược lại nếu "name" không rỗng
    $productImage =  $_FILES["new-image"]["name"]; //lấy ra tên ảnh từ file mới chọn và gán cho biến $productImage
    move_uploaded_file($_FILES["new-image"]["tmp_name"],"../image/".$_FILES["new-image"]["name"]);//thực hiện chuyển file từ thư mục tạm vào thư mục image
}
   header('location:'. ADMIN_URL . 'banner');
}
function addbanner()
{
  adminRender('banner/add.php',[]);
}
?>
<?php 
    function indexAccount(){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
        $sql = "SELECT * FROM `taikhoan` WHERE user LIKE '%$keyword%'";
        $account = pdo_query($sql);
        // hiển thị view
        adminRender('account/index.php', compact('account','keyword'),'admin-assets/custom/script.js');
    }
    
    function DeleteAccount()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `taikhoan` WHERE id=$id";
    pdo_query_one($sql);
    header('location:'. ADMIN_URL . 'khach-hang');
 }

    function getAccount()
{
     $id = $_GET['id'];
     $sql = "SELECT * FROM `taikhoan` WHERE id=$id";
     $ac = pdo_query_one($sql);
     adminRender('account/update.php', compact('ac'));
 }
     function updateAccount()
{
     $id = $_POST['id'];
     $name = $_POST['user'];
     $sql = "UPDATE `taikhoan` SET `user`='$name' WHERE id =$id";
     pdo_execute($sql);
     header("location:" . ADMIN_URL . 'khach-hang');
    }
?>
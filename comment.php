<?php
    session_start();
    include "../model/connect.php";
    include "../model/comment.php";
    if(isset($_SESSION['sid'])&&($_SESSION['sid']>0)){

        if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
            $user=$_SESSION['user'];
        }else{
            $user="";
        }

        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            //
                $name=$_POST['name'];
                $name=$_POST['noidung'];
                $idsp=$_POST['idsp'];
                $iduser=$_SESSION['sid'];
            //

            addCmt($name,$iduser,$idsp,$noidung);
                
        }
        $dsbl=showcmt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>
<body>
    <hr>
    <form action="comment.php">
        <input type="text" name="name" value="<?=$user?>"> 
        <input type="hidden" name="idsp" value="<?=$_GET['idsp']?>">
        <textarea name="noidung" id="" cols="30" rows="10" name="noidung"></textarea>
        <input type="submit" value="Gửi bình luận" name="guibinhluan">
    </form>

    <hr>
        <?php 
            
            foreach ($dsbl as $bl) {
                echo $bl['name'].' - '.$bl['noidung']."<br>";
            }

    ?>

    
</body>
</html>
<?php }else{
    echo "<a href='index.php?act=user' target='_parent'>Bạn vui lòng đăng nhập!</a>";
}?>
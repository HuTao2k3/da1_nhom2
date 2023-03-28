<?php
function addCmt($name,$iduser,$idsp,$noidung){
    $sql = "INSERT INTO binhluan (name, iduser, idsp, noidung) VALUES ('$name', '$iduser', '$idsp', '$noidung')";
    $conn=connect();
    $conn->exe($sql);
    $productName = $_POST["name"];
    $productDesc = $_POST["desc"];
    $view = $_POST['view'];
    $file = $_FILES['image'];
    $filename = "";
}

function showcmt(){
    $sql = "select * from comment order bt id desc";
    $conn=connect();
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFechMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
?>
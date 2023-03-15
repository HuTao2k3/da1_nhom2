<?php
function getAllCate(){
    $sql = "SELECT * FROM `category`";
    $listCategory = pdo_query($sql);
    return $listCategory;
}
?>
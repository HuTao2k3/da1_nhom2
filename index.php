<?php
session_start();
$url = isset($_GET['url']) ? rtrim($url = $_GET['url'], '/') : "/";
require_once "./commons/utils.php";
require_once "./dao/pdo.php";
require_once "./admin/business/category.php";
switch ($url) {
        // =========Trang chủ===========
    case "/":
        require_once "./client/business/home.php";
        home(10);
        break;
        
    case "tat-ca-san-pham":
        require_once "./client/business/product.php";
        loadAllProduct();
        break;

    case "chi-tiet-san-pham":
        require_once "./client/business/product.php";
        detailProduct();
        break;
        //========Trang chủ=============

        // =========admin==============
    case "web-management":
        require_once "./admin/business/dashboard.php";
        dashboardIndex();
        break;

    case "web-management/danh-muc":
        require_once "./admin/business/category.php";
        cateIndex();
        break;

    case "web-management/danh-muc/xoa":
        require_once './admin/business/category.php';
        cateDelete();
        break;

    case "web-management/danh-muc/them-danh-muc":
        require_once './admin/business/category.php';
        addCate();
        break;

    case "web-management/danh-muc/get-danh-muc":
        require_once "./admin/business/category.php";
        getCate();
        break;

    case "web-management/danh-muc/luu-them-danh-muc":
        require_once './admin/business/category.php';
        addSave();
        break;

    case "web-management/danh-muc/cap-nhat-danh-muc":
        require_once './admin/business/category.php';
        updateCate();
        break;
        // ======= admin product ============
    case "web-management/san-pham":
        require_once "./admin/business/product.php";
        proIndex();
        break;

    case "web-management/san-pham/xoa":
        require_once './admin/business/product.php';
        proDelete();
        break;

    case "web-management/san-pham/them-san-pham":
        require_once './admin/business/product.php';
        addPro();
        break;

    case "web-management/san-pham/luu-them-san-pham";
        require_once './admin/business/product.php';
        addSavePro();
        break;

    case "web-management/san-pham/get-san-pham":
        require_once "./admin/business/product.php";
        loadOneProduct();
        break;

    case "web-management/san-pham/luu-cap-nhat-san-pham";
        require_once "./admin/business/product.php";
        updatePro();
        break;
    default:
        echo "404 NOT FOUND";
}

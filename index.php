<?php
session_start();
$url = isset($_GET['url']) ? rtrim($url = $_GET['url'], '/') : "/";
require_once "./commons/utils.php";
require_once "./dao/pdo.php";
require_once "./admin/business/category.php";
require_once "./client/business/category.php";
require_once "./client/business/size.php";
//-----------mailer-------------
require_once './PHPMailer-master/src/PHPMailer.php';
require_once './PHPMailer-master/src/SMTP.php';
require_once './PHPMailer-master/src/Exception.php';

switch ($url) {
        // =========Trang chủ===========
    case "/":
        require_once "./client/business/home.php";
        home(10);
        break;

    case "san-pham":
        require_once "./client/business/product.php";
        Paging();
        break;

    case "chi-tiet-san-pham":
        require_once "./client/business/product.php";
        detailProduct();
        break;

    case "loc-san-pham":
        require_once "./client/business/product.php";
        filter();
        break;
    
    case "yeu-thich":
        require_once "./client/business/home.php";
        favourite();
        break;

    case 'form-dangky':
        require_once "./client/business/taikhoan.php";
        form_dangky();
        break;

    case 'dangky':
        require_once "./client/business/taikhoan.php";
        dangky();
        break;

    case 'dangnhap':
        require_once "./client/business/taikhoan.php";
        dangnhap();
        break;

    case 'form-dangnhap':
        require_once "./client/business/taikhoan.php";
        form_dangnhap();
        break;

    case 'edit-taikhoan':
        require_once "./client/business/taikhoan.php";
        edit_taikhoan();
        break;

    case 'form-edit-taikhoan':
        require_once "./client/business/taikhoan.php";
        form_edit_taikhoan();
        break;

    case 'quenmk':
        require_once "./client/business/taikhoan.php";
        quen_mk();
        break;

    case 'form-quenmk':
        require_once "./client/business/taikhoan.php";
        form_quenmk();
        break;

    case 'thoat':
        session_unset();
        header('Location:' . BASE_URL);
        break;
        //========Trang chủ=============

        // =========admin==============
    case "web-management/lien-he":
        require_once "./admin/business/contactUser.php";
        mailForm();
        break;
        //Account
    case "web-management/khach-hang":
        require_once "./admin/business/account.php";
        indexAccount();
        break;

    case "web-management/khach-hang/cap-nhat-account":
        require_once "./admin/business/account.php";
        updateAccount();
        break;

    case "web-management/khach-hang/get-account":
        require_once "./admin/business/account.php";
        getAccount();
        break;

    case "web-management/khach-hang/xoa":
        require_once "./admin/business/account.php";
        DeleteAccount();
        break;

    case "web-management/gui-mail":
        require_once "./admin/business/contactUser.php";
        sendMail();
        break;

    case "web-management":
        require_once "./admin/business/dashboard.php";
        dashboardIndex();
        break;

    case "web-management/khach-hang/luu-them-account":
        require_once './admin/business/account.php';
        addSaveAccount();
        break;

    case "web-management/khach-hang/them-account":
        require_once './admin/business/account.php';
        addAccount();
        break;
        // danh muc
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

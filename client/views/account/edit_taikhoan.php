
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row mb xl:container mx-auto">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle text-center font-bold text-lg mt-2">Cập Nhật Tài Khoản</div>
            <div class="row boxcontent formtaikhoan">
            <?php
                    if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                        # code...
                        extract($_SESSION['user']);

                    }
                ?>
                <form action="<?= BASE_URL . 'edit-taikhoan'?>" method="post" class="w-3/6 m-auto">
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your email</label>
                    <input type="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@gmail.com" value="<?=$email?>">
                </div>
                <div class="mb-6">
                    <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tên đăng nhập</label>
                    <input type="text" name="user" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="<?=$user?>">
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Mật khẩu</label>
                    <input type="password" name="pass" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="<?=$pass?>">
                </div>
                <div class="mb-6">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Địa Chỉ</label>
                    <input type="text" name="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="<?=$address?>">
                </div>
                <div class="mb-6">
                    <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Điện thoại</label>
                    <input type="text" name="tel" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="<?=$tel?>">
                </div>
                <input type="hidden" name="id" value="<?=$id?>">
                <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit" value="Cập Nhật" name="capnhat">
                <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="reset" value="Nhập lại">
                </form>

                <h2 class="thongbaoloi">
                <?php
                
                
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                
                ?>
                </h2>
            </div>
        </div>
        
    </div>
    
</div>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>


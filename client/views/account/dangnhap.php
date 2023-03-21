
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row mb xl:container mx-auto py-5">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle text-center font-bold text-lg mt-2">Account</div>
            <div class="row boxcontent formtaikhoan">
            <?php
                if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
            <div class="row mb10">
                Xin chào !<br />
                <?=$user?>
            </div>
            <div class="row mb10">
              <li><a href="<?= BASE_URL . 'form-quenmk'?>">Forgot Password</a></li>
              <li><a href="<?= BASE_URL . 'edit-taikhoan'?>">Update Account</a></li>
              <?php
                if ($role == 1) {

              ?>
              <li><a href="#">Đăng Nhập Admin</a></li>
              <?php } ?>
              <!-- <li><a href="<?= BASE_URL . 'thoat'?>">Thoát</a></li> -->
            </div>
            <?php    
                }else{
            ?>
                <form action="<?= BASE_URL . 'dangnhap'?>" method="post" class="w-3/6 m-auto">
                
                <div class="mb-6">
                    <label for="tendangnhap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name login</label>
                    <input type="text" name="user" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                <div class="mb-6">
                    <label for="password"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Passowrd</label>
                    <input type="password" name="pass" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
                </div>
                <!-- <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                    </div>
                    <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tôi đồng ý với các <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">điều khoản và điều kiện</a></label>
                </div> -->

                <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit" value="Login" name="dangnhap"/>
                
                <a class="text-white text-center block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="<?= BASE_URL . 'form-dangky'?>">Register</a>
                <li><a href="<?= BASE_URL . 'form-quenmk'?>">Quên mật khẩu</a></li>
                <!-- <li><a href="<?= BASE_URL . 'dangky'?>">Đăng ký thành viên</a></li> -->
                </form>
                
            <?php } ?>
                
            </div>
        </div>
        
    </div>
    
</div>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>


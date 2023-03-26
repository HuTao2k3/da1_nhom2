<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= USER_ASSET ?>/css/validator.css">

</head>

<body>
    <div class="row mb xl:container mx-auto">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle text-center font-bold text-lg mt-2">Sign Up</div>
                <div class="row boxcontent formtaikhoan">

                    <form action="<?= BASE_URL . 'quenmk' ?>" method="post" class="w-3/6 m-auto" id="form-quenmk">
                        <div class="form-group mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your email</label>
                            <input id="email" type="email" name="email" class="form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@gmail.com">
                            <span class="form-message"></span>
                        </div>



                        <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit" value="Send" name="guiemail">
                        <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="reset" value="Reset">
                    </form>

                    <h2 class="text-red-500">
                        <?php


                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }

                        ?>
                    </h2>
                </div>
            </div>

        </div>

    </div>
    <script src="<?= USER_ASSET ?>/js/validator.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Validator({
                form: '#form-quenmk',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#email'),
                    Validator.isEmail('#email'),
                ]
            });
        });
    </script>
</body>

</html>
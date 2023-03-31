<h1 class="text-center py-10 text-[25px] font-bold">Product added to cart</h1>
<div class="mx-auto max-w-7xl">
    <table>
        <thead class="border-b-[1px] border-solid border-black">
            <th class="w-[10%]">Product</th>
            <th class="w-[5%]">Quantity</th>
            <th class="w-[5%] pl-7">Category</th>
            <th class="w-[20%]">Price</th>
            <th class="w-[20%]">Remove</th>
        </thead>

        <tbody >
            <?php $totalPrice = 0 ?>
            <?php foreach ($cart as $item) :?>
            <tr class="text-center border-b-[1px] border-solid border-black">
                <td class="w-[50%] py-4">
                    <img class="w-24 h-24 inline" src="<?= PUBLIC_URL . $item['image']?>" alt="">
                    <p class="inline ml-2 text-black"><?= $item['name']?></p>
                </td>
            <td class="w-[5%]"><?= $item['quantity']?></td>
            <td class="w-[5%]">
            <?php
              $id = $item['id_category'];
              $categori = loadOneCate($id);
               echo $categori['categoryName'];
             ?>
            </td>
            <td class="w-[20%]"><?= number_format($item['price'] * $item['quantity'] ) ?>đ</td>
            <?php $totalPrice += $item['price'] * $item['quantity'] ?>
            <td><i class='bx bxs-trash'></i></td>
                <?php endforeach?>
            </tr>
        </tbody>
    </table>

    <div class="flex justify-between py-14">
    <span class="">Total : <?= number_format($totalPrice)?>đ</span>
    <a href="<?= BASE_URL . 'form-pay-cart'?>">Pay</a> 
    </div>

</div>


<!-- <div class=" mt-8">
    <h1>Form Pay</h1>
    <form action="<?= BASE_URL . 'pay-cart' ?>" method="post">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Phone</label>
        <input type="number" name="phone">
        <label for="">Address</label>
        <input type="text" name="address">
        <label for="">Note :</label>
        <textarea name="note" id="" cols="30" rows="10"></textarea>

        <button class="border-2 border-solid border-black p-3" type="submit">Pay</button>
    </form>
</div>  -->

<?php extract($ac) ?>
<form class="flex justify-center items-center bg-white w-[600] rounded h-[570px]" action="<?= ADMIN_URL . 'khach-hang/cap-nhat-account'?>" method="post" class="form-horizontal">
    <div class="">
        <label class="text-[30px] font-bold text-[#666565]" for="">Update Account <i class='mt-1 bx bxs-category' ></i></label>
    <div class="">
    <input type="hidden" value="<?= $ac['id']?>" name="id" require class="form-control"  placeholder="taikhoan">
    <input type="text" value="<?= $ac['user']?>" class="my-2 bg-[#e5e5e5] w-[500px] p-3 rounded outline-none" name="user" require class="form-control" id="inputuser" placeholder="User Name">
    <input type="text" value="<?= $ac['pass']?>" class="my-2 bg-[#e5e5e5] w-[500px] p-3 rounded outline-none" name="pass" require class="form-control" id="inputuser" placeholder="Password">
    <input type="text" value="<?= $ac['email']?>" class="my-2 bg-[#e5e5e5] w-[500px] p-3 rounded outline-none" name="email" require class="form-control" id="inputuser" placeholder="Email">
    <input type="text" value="<?= $ac['address']?>" class="my-2 bg-[#e5e5e5] w-[500px] p-3 rounded outline-none" name="address" require class="form-control" id="inputuser" placeholder="Address">
    <input type="text" value="<?= $ac['tel']?>" class="my-2 bg-[#e5e5e5] w-[500px] p-3 rounded outline-none" name="tel" require class="form-control" id="inputuser" placeholder="Phone">
    <input type="number" value="<?= $ac['role']?>" class="my-2 bg-[#e5e5e5] w-[500px] p-3 rounded outline-none" name="role" require class="form-control" id="inputuser" placeholder="Role">        
    </div>
    <div class="card-footer">
    <button type="submit" class="border-2 mt-3 mr-3 text-[17px] border-[#3c91e6] rounded bg-[#3c91e6] text-white px-3 py-2">Update</button></a>
    <a class="border-2 mt-3 text-[17px] border-gray-400 rounded bg-gray-400 text-white px-3 py-2" href="<?= ADMIN_URL . 'khach-hang'?>">Cancel</a>
  </div>
    </div>

</form>
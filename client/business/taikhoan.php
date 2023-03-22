<?php
    function form_dangky(){
        clientRender('account/dangky.php');
    }
    function form_dangnhap(){
        clientRender('account/dangnhap.php');    
    }
    function form_edit_taikhoan(){
        clientRender('account/edit_taikhoan.php');
    }
    function form_quenmk(){
        clientRender('account/quenmk.php');
    }
    function form_listtk(){
        adminRender('khachhang/index.php');
        
    }
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function insert_taikhoan($email,$user,$pass){
        $sql = "insert into taikhoan(email,user,pass) values('$email', '$user', '$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql="select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){       
        $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }
    //log in,sign in
function dangky(){
    if (isset($_POST['dangky'])&&($_POST['dangky'])) {
      $email=$_POST['email'];
      $user=$_POST['user'];
      $pass=$_POST['pass'];
      insert_taikhoan($email,$user,$pass);
      $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
      header('location:' . BASE_URL . 'form-dangnhap');
  }

  }
  
  function dangnhap(){
    if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
      $user=$_POST['user'];
      $pass=$_POST['pass'];
      $checkuser=checkuser($user,$pass);
      if (is_array($checkuser)) {
          
          $_SESSION['user']=$checkuser;
          // $thongbao="Bạn đã đăng nhập thành công!";
          header('Location:'.BASE_URL);
      }else{
        header('Location:'.BASE_URL);
      }                
  }
  }
  function edit_taikhoan(){
    if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
      $user=$_POST['user'];
      $pass=$_POST['pass'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $tel=$_POST['tel'];
      $id=$_POST['id'];
      update_taikhoan($id,$user,$pass,$email,$address,$tel);  
      $_SESSION['user']=checkuser($user,$pass);                        
          header('location:'.BASE_URL.'form-edit-taikhoan');                                   
  }
  }
  function quen_mk(){
    if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
        $email=$_POST['email'];

        $checkemail=checkemail($email);
        if(is_array($checkemail)){
            $thongbao="Mat khau cua ban la: ".$checkemail['pass'];
        }else{
            $thongbao="Email nay khong ton tai";
        }
    }
    
  }
  function list_taikhoan(){
    $listtaikhoan = loadall_taikhoan();
    
}
?>
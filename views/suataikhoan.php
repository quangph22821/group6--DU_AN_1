<div class="update_taikhoan" style="">
    <form action="index.php?act=&id=<?=$taikhoan['id']?>" method='post'>

    <input type="hidden" name="id" value="<?=$taikhoan['id']?>">

    <div class="form-group">
        <label for="">Tên tài khoản</label><br>
        <input type="text" name="name"  value="<?= $taikhoan['name']?>">
    </div>
    <div class="form-group">
        <label for="">Địa chỉ</label><br>
        <input type="text" name="name"  value="<?= $taikhoan['address']?>">
    </div>
    <div class="form-group">
        <label for="">Email</label><br>
        <input type="email" name="email"  value="<?= $taikhoan['email']?>">
    </div>
    <div class="form-group">
        <label for="">Số điện thoại</label><br>
        <input type="text" name="telephone"  value="<?= $taikhoan['telephone']?>">
    </div>
    <div class="form-group">
        <label for="">Tên đăng nhập</label><br>
        <input type="text" name="user_name"  value="<?= $taikhoan['user_name']?>">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label><br>
        <input type="password" name="password"  value="<?= $taikhoan['password']?>">
    </div>

    <div class="btn">
      <input type="submit" value="Cập nhật" name="updatetaikhoan">
        <input type="reset" value="NHẬP LẠI">
    </div>

</form>

</div>

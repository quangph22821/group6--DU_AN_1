<div class="row">
    <div class="btn-info">
        <h1>Danh sách tin tức</h1> 
    </div>
    <div class="detail">
    <table class="table" border="1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tiêu Đề</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Ngày đăng</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($list_tin_tuc as $key => $value): ?>
            <tr>
                
                <td><?=$value['id']?></td>
                <td><?=$value['tieu_de']?></td>
                <td><?=$value['mo_ta']?></td>
                <td><img src="../upload/<?=$value['hinh_anh']?>" width="100px"></td>
                <td><?=$value['ngay_them']?></td>
                <td>
                    <a href="index.php?act=edittintuc&id=<?=$value['id']?>">Edit</a>
                    <a href="index.php?act=deltintuc&id=<?=$value['id']?>">Delete</a>
                    <a href="./index.php?act=addtintuc">ADD</a>
                </td>

            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    </div>
</div>
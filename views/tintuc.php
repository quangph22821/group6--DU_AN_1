<div class="tintuc">
    <div class="tintuc_list">
        <?php foreach($load_all_tin_tuc as $tin_tuc): ?>
        <div class="tintuc_news">
            <div class="tintuc_img">
            <a href="./index.php?act=chitiettintuc&id=<?=$tin_tuc['id']?>"><img src="./upload/<?= $tin_tuc['hinh_anh'] ?>" alt="" width="380px"></a>
            </div>
            <div class="tintuc_tintuc">
                <h2>Tin tức</h2>
            </div>
            <div class="tintuc_title">
                <h3><?=$tin_tuc['tieu_de'] ?></h3>
            </div>
            <div class="tintuc_system">
                <p><?=$tin_tuc['mo_ta'] ?>
                </p>
            </div>
            <div class="tintuc_chitiet">
                    <a href="./index.php?act=chitiettintuc&id=<?=$tin_tuc['id']?>">Chi tiết</a>
            </div>
        <div>
        <?php endforeach ?>
    <div>
</div>

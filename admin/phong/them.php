<div class="phong">
    <div class="text">
        <h1>Thêm mới phòng</h1>
    </div>
    <form action="index.php?act=addphong" method="post">
        <label for="">Loại phòng</label>
        <br>
        <select name="room_name" id="">
            <?php
                foreach ($listloaiphong as $key => $value):{
                    
                }
            ?>
                <option value=""></option>
            <?php endforeach?>
        </select>
    </form>
</div>
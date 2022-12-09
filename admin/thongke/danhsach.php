<div class="thongke">
    <div class="text">
        <h1>THỐNG KÊ THEO LOẠI PHÒNG</h1>
    </div>
    <a href="index.php?act=thongkedanhmuc">Thống kê doanh thu</a>
    <div class="thongke">
        <table>
                    <tr>
                        <th>Mã phòng</th>
                        <th>Tên phòng</th>
                        <th>Số lượng</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá cao nhất</th>
                        <th>Giá trung bình</th>
                    </tr>

                    <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo'  <tr>
                            <td>'.$matk.'</td>
                            <td>'.$tentk.'</td>
                            <td>'.$count_room.'</td>
                            <td>'.$minprice.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$avgprice.'</td>
                        </tr>';
                        }
                    ?>
        </table>
    </div> 
       

</div>
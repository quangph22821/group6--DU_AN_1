<div class="thongke">
    <div class="text">
        <h1>THỐNG KÊ DOANH THU</h1>
    </div>
    <a href="index.php?act=thongke">Thống kê theo loại phòng</a>
    <div class="thongke">
        <table>
                    <tr>
                        <th>Doanh thu</th>
                        
                    </tr>

                    <?php
                        foreach ($thongkedt as $thongke) {
                            extract($thongke);
                            echo'  <tr>
                            <td>'.$doanhthu.'</td>
                            
                        </tr>';
                        }
                    ?>
        </table>
    </div> 
       

</div>
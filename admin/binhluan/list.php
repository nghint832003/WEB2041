<div class="row">
            <div class="row frmtitle"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
            <div class="row frmcontent">
                <form action="#" method="post">
                    <div class="row mb10 frmdsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ BL</th>
                                <th>NỘI DUNG</th>
                                <th>IDPRO</th>
                                <th>NGÀY BL</th>
                                <th></th>
                            </tr>
                            <?php
                                 foreach($listbinhluan as $binhluan){
                                    extract($binhluan);
                                    $suabl="index.php?act=suabl&ma_kh=".$ma_bl;
                                    $xoabl="index.php?act=xoabl&ma_kh=".$ma_bl;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$ma_bl.'</td>
                                    <td>'.$noi_dung.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngay_bl.'</td>
                                    <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                                 }
                            ?>
                            
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục chọn">
                    </div>
                </form>
            </div>
        </div>
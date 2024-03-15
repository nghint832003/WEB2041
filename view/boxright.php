<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>
                            <div class="row mb10">
                                Xin chào <br>
                                <?=$ho_ten?>
                            </div>
                            <div class="row mb10">
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php if($vai_tro==1){?>
                                <li>
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php }?>
                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>
                        <?php
                            }else{
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name=""> Ghi nhớ tài khoản? <br>
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                        <?php    }?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$ma_loai;
                                    echo '<li>
                                            <a href="'.$linkdm.'">'.$ten_loai.'</a>
                                        </li>';
                                }
                            ?>
                            <!-- <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Labtop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Balo</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Labtop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Balo</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$ma_sp;
                                $img=$img_path.$hinh;
                                echo '<div class="row mb10 top10">
                                <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                        <a href="'.$linksp.'">'.$ten_sp.'</a>
                                    </div>';
                            }
                        ?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/images/products/1020.jpg" alt="">
                            <a href="">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1075.jpg" alt="">
                            <a href="">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1029.jpg" alt="">
                            <a href="">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1054.jpg" alt="">
                            <a href="">Mishi Kobe Niku</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1073.jpg" alt="">
                            <a href="">Carnarvon Tigers</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1059.jpg" alt="">
                            <a href="">Raclette Courdavault</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1051.jpg" alt="">
                            <a href="">Manjimup Dried Apples</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1062.jpg" alt="">
                            <a href="">Tarte au sucre</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1070.jpg" alt="">
                            <a href="">Russle Sauerkraut</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/products/1028.jpg" alt="">
                            <a href="">Ipoh Coffee</a>
                        </div> -->
                    </div>
                </div>
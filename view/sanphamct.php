<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
                extract($onesp);
            ?>
            <div class="boxtitle"><?=$ten_sp?></div>
            <div class="row boxcontent">
                <?php
                    $img=$img_path.$hinh;
                    echo '<img src="'.$img.'"><br>';
                    echo $mo_ta;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$ma_sp?>});
            });
        </script>
        <div class="row" id="binhluan">
            
        </div>
        <!-- <div class="row">
            <iframe src="" frameborder="0"></iframe>
        </div> -->
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp= "index.php?act=sanphamct&idsp=".$ma_sp;
                        echo '<li><a href="'.$linksp.'">'.$ten_sp.'</a></li>';
                    }
                ?>
            </div>
        </div>     
    </div>
    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>
</div>
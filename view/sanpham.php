<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM <strong><?=$tendm?></strong></div>
            <div class="row boxcontent">
                <?php
                    $i=0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$ma_sp;
                        $ha=$img_path.$hinh;
                        if(($i==2)||($i==5)||($i==8)||($i==11)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp '.$mr.'">
                                <div class="row img"><a href="'.$linksp.'"><img src="'.$ha.'" alt=""></a></div>
                                <p>$'.$don_gia.'</p>
                                <a href="'.$linksp.'">'.$ten_sp.'</a>
                            </div>';
                            $i+=1;
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>
</div>
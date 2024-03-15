<?php
    function insert_binhluan($noi_dung,$iduser,$idpro,$ngay_bl){
        $sql="insert into binh_luan(noi_dung,iduser,idpro,ngay_bl) values('$noi_dung','$iduser','$idpro','$ngay_bl')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro){
        $sql="select * from binh_luan where 1";
        if($idpro>0) $sql.=" AND idpro='".$idpro."'";
        $sql.=" order by ma_bl desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }
?>
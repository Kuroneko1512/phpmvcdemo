<?php 

function get_giangvien_bomon(){
    $sql = "SELECT * FROM `giang_vien` gv
            INNER JOIN `bo_mon` bm ON gv.id_bomon = bm.id_bomon";
    
    $result = pdo_get_all($sql);
    return $result;
}

function get_bomon(){
    $sql ="SELECT * FROM `bo_mon`";
    $result = pdo_get_all($sql);
    return $result;
}

function delete_giangvien($id){
    $sql = "DELETE FROM `giang_vien` WHERE `id` = {$id}";
    pdo_excute($sql);
}

function add_giangvien($arr){
    
}
?>
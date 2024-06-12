<?php 
require "./models/giangvien_model.php";


foreach(glob("./view/giangvien/*.php") as $filename){
    include $filename;
}

function giangvien_index(){

    $giangvien = get_giangvien_bomon();
    // var_dump($giangvien);
    // die();
    $bomon = get_bomon();
    // include "view/giangvien/list.php";  
    // require_once "./view/giangvien/list.php";
    render_giangvien_list($giangvien, $bomon);
}

function giangvien_delete($id){

    delete_giangvien($id);
    header("location:index.php?controller=giangvien&action=index");
}

function giangvien_add(){

}

function giangvien_addview(){
    
}
?>
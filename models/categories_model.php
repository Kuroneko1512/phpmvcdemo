<?php 
  require'pdo.php';
   function get_categories(){
  
    $sql = "SELECT * FROM `categories`";
    $result = pdo_get_all($sql);
    return $result;
}
function add_category($arr){
    $category_name = $arr['category_name'];
    $category_des = $arr['category_des'];
    $sql = "INSERT INTO `categories`( `category_name`, `category_des`) VALUES ('$category_name','$category_des')";
    pdo_excute($sql);
    
}
function delete_category($id){
    $sql = "DELETE FROM `categories` WHERE `category_id` = {$id}";
    pdo_excute($sql);

}
function get_category($id){
    $sql = "SELECT * FROM `categories` WHERE `category_id` = {$id}";
    $result = pdo_get($sql);
    return $result;
}
function edit_category($arr,$id) {
    
    $category_name = $arr['category_name'];
    $category_des = $arr['category_des'];
    $sql ="UPDATE `categories` SET `category_name`='$category_name',`category_des`='$category_des' WHERE `category_id` = {$id}";
    pdo_excute($sql);
}
?>
<?php 
//   require'pdo.php';
  function add_comment($arr){
    $user_name = $arr['user'];
    $content = $arr['content'];
    $date_create = $arr['date_created'];
     $status = $arr['status'];
$product_id = $arr['product_id'];
    $sql = "INSERT INTO `comments`(`user_name`, `content`, `date_create`, `status`,`product_id`)
     VALUES ('$user_name','$content','$date_create','$status',$product_id)";
     pdo_excute($sql);
  }
  function get_comments(){
    $sql = "SELECT * FROM `comments`";
    $data = pdo_get_all($sql);
    return $data;

  }
?>
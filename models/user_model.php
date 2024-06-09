<?php 
    // require'pdo.php';
  function get_user($name){
    $sql = "SELECT * FROM `users` WHERE `username` = '$name'";
   
    $result = pdo_get($sql);
   
    if(!empty($result)){
        return $result['role'];
    }

  }
  function add_user($user,$pass){
    $sql = "INSERT INTO `users`( `username`, `password`, `role`) VALUES ('$user','$pass',0)";
    pdo_excute($sql);
  }
  function get_users(){
    $sql = "SELECT * FROM `users`";
   
    $result = pdo_get_all($sql);
        return $result;
  }
  function ban_user($id,$role){
    $sql = "UPDATE `users` SET `role`= {$role} WHERE `user_id` = '$id'";
    pdo_excute($sql);
  }
?>
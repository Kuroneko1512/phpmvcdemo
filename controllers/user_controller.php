<?php
// foreach (glob("./models/*.php") as $filename) {
//     include $filename;
//   }

foreach (glob("./view/user/*.php") as $filename) {
  include $filename;
}
require"./models/user_model.php";
function user_loginView()
{
  echo render_login();
}
function user_login()
{
  // require"./models/user_model.php";
  // session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form

    $user = $_POST['username'];

    $pass = $_POST['password'];

    if (!empty($user) && !empty($pass)) {

      $role = get_user($user);
      // var_dump($role);
      // die();
      if (isset($role)) {
        if($role == 2){
          $_SESSION['error'] = 'may bị ban';
          header("Location:index.php?controller=user&action=loginView");
        }else{
          $_SESSION['user'] = $user;
          if ($role === 1) {
            $_SESSION['role'] = 'admin';
          }
          header("Location:index.php?controller=home&action=index");
        }
      
        
      
      } else {
        header("Location:index.php?controller=user&action=loginView");
      }
    }
  }
}
function user_logout()
{
  // session_start();
  unset($_SESSION['user']);
  unset($_SESSION['role']);
  header("Location:index.php?controller=home&action=index");
}
function user_registerView()
{
  // echo render_register();
}
function user_register()
{

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form

    $user = $_POST['username'];

    $pass = $_POST['password'];

    $email = $_POST['email'];

    // var_dump($user,$pass,$email);
    // die();

    if (!empty($user) && !empty($pass)) {
      add_user($user,$pass,$email);
      header('Location:index.php?controller=user&action=loginView');

    }
  }
}
function user_lists(){
  Authen();
  $data = get_users();
  
  $limit = 5; // Số sản phẩm trên mỗi trang
  $total = count($data); // Tổng số sản phẩm
  $pages = ceil($total / $limit);

  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $start = ($page - 1) * $limit;
  $end = min(($start + $limit - 1), $total - 1);

  // Lấy dữ liệu cho trang hiện tại
  $currentUser = array_slice($data, $start, $limit);
  echo render_user_list($currentUser, $pages);
}
function user_ban($id){
  $role = isset($_GET['role']) ? $_GET['role'] : 0;
  ban_user($id, $role);
    header('location:index.php?controller=user&action=lists&page=1');
}

<?php 
  require "./models/comment_model.php";
  foreach (glob("./view/comments/*.php") as $filename) {
    include $filename;
  }
    function comment_index(){
        $data = get_comments();
      
        $limit = 5; // Số sản phẩm trên mỗi trang
        $total = count($data); // Tổng số sản phẩm
        $pages = ceil($total / $limit);
      
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $end = min(($start + $limit - 1), $total - 1);
      
        // Lấy dữ liệu cho trang hiện tại
        $currentcoments = array_slice($data, $start, $limit);
        echo render_comment_list($currentcoments, $pages);
    }
    function comment_add($id){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
          $user = isset($_SESSION['user']) ?  $_SESSION['user'] : 'khách';
          $date = date("Y-m-d");
        //   var_dump($user);
        //   die(date("Y-m-d"));
            $arr = array(
              "content" => $_POST['content'],
             "date_created" => $date,
             "user" => $user,
             "status" => 1,
             "product_id" => $id,
            );
           add_comment($arr);
          }
          comeback_page();
    }
    function comment_ban($id){

    }
    function get_comment($id){
        $sql = "SELECT * FROM `comments` WHERE `product_id` = $id";
        $data = pdo_get_all($sql);
        return $data;
    }
?>
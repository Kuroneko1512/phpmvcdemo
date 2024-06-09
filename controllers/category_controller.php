<?php
  require "./models/categories_model.php";
// require "./models/product_model.php";
// require "./view/home/home.php";
// require "./view/home/Details.php";
// require "./view/products/list.php";
require "./services/service.php";
// require "./view/products/add.php";

foreach (glob("./view/categories/*.php") as $filename) {
  include $filename;
}
function get_cate(){
  $data = get_categories();
  return $data;
}
function category_index()
{
  $data = get_cate();
  Authen();
  $limit = 5; // Số sản phẩm trên mỗi trang
  $total = count($data); // Tổng số sản phẩm
  $pages = ceil($total / $limit);

  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $start = ($page - 1) * $limit;
  $end = min(($start + $limit - 1), $total - 1);

  // Lấy dữ liệu cho trang hiện tại
  $currentProducts = array_slice($data, $start, $limit);
  echo render_cate_list($currentProducts, $pages);
}
// function product_details($id)
// {
//   Authen();
//   $data = get_product($id);

//   render_product_details($data);
// }
function category_addview()
{
  Authen();

  echo render_cate_add();
}

function category_add()
{
  Authen();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $arr = array(
      "category_name" => $_POST['name'],
     
      "category_des" =>  $_POST['description'],
    
    );
     add_category($arr);
    
  }
  header('location:index.php?controller=category&action=index&page=1');
}
function category_editview($id)
{
  Authen();
  $data = get_category($id);

  echo render_cate_edit($data);
}

function category_edit($id)
{
  var_dump($id);
  Authen();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $arr = array(
      "category_name" => $_POST['name'],
     
      "category_des" =>  $_POST['description'],
    
    );
    edit_category($arr,$id);
  }
  header('location:index.php?controller=category&action=index&page=1');
}

function category_delete($id)
{
  Authen();
  delete_category($id);
  comeback_page();
}
function header_category($data){
   
   
    return $data;
}

?>
<?php
require "./models/product_model.php";
// require "./models/categries_model.php";
// require "./view/home/home.php";
// require "./view/home/Details.php";
// require "./view/products/list.php";
// require "./services/service.php";
// require "./view/products/add.php";
// require "./models/categories_model.php";
foreach (glob("./view/products/*.php") as $filename) {
  include $filename;
}

function product_index()
{
  Authen();
  $data = get_products();
  $limit = 5; // Số sản phẩm trên mỗi trang
  $total = count($data); // Tổng số sản phẩm
  $pages = ceil($total / $limit);

  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $start = ($page - 1) * $limit;
  $end = min(($start + $limit - 1), $total - 1);

  // Lấy dữ liệu cho trang hiện tại
  $currentProducts = array_slice($data, $start, $limit);
  echo render_pro_list($currentProducts, $pages);
}
function product_details($id)
{
  Authen();
  $data = get_product($id);

  render_product_details($data);
}
function product_addview()
{
  $data = get_cate();
  Authen();
  echo render_pro_add($data);
}

function product_add()
{
  Authen();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $img = basename($_FILES['image']['name']);
    $arr = array(
      "product_name" => $_POST['name'],
      "product_price" => $_POST['price'],
      "product_des" =>  $_POST['description'],
      "product_quantity" => $_POST['quantity'],
      "category_id" => $_POST['category'],
      "product_img" => $img,
    );
    $id = add_product($arr);
    
    $dir = './lib/img/';
    move_uploaded_file($_FILES['image']['tmp_name'], $dir . $img);
    add_product_img($id, $img);
  }
  header('location:index.php?controller=product&action=index&page=1');
}
function product_editview($id)
{
  Authen();
  $data = get_product($id);
  $data_cate = get_categories();
  echo render_pro_edit($data,$data_cate);
}

function product_edit($id)
{
  Authen();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $arr = array(
      "product_name" => $_POST['name'],
      "product_price" => $_POST['price'],
      "product_des" =>  $_POST['description'],
      "product_quantity" => $_POST['quantity'],
      "category_id" => $_POST['category'],
    );
    edit_product($arr,$id);
  }
  header('location:index.php?controller=product&action=index&page=1');
}

function product_delete($id)
{
  Authen();
  delete_product($id);
  comeback_page();
}


<?php
require "./models/product_model.php";
require "./view/home/home.php";
require "./view/home/Details.php";
require "./view/home/comment.php";
require "./view/home/CateDetails.php";
require "./view/home/cart.php";


require "user_controller.php";
require "./controllers/comment_controller.php";

// foreach (glob("./view/home/*.php") as $filename) {
//     include $filename;
//   }
    function home_index() {
    $data = get_products();
    $data_cate = get_cate();
    $top_products = array_slice($data, 0, 16);
     echo render_product($top_products,$data_cate);

     echo render_products($data,$data_cate);

    }
    function home_details($id) {

        $data = get_product($id);
        $data_comment = get_comment($id);
       render_product_details($data);
       render_comment_details($id);
       render_comment($data_comment);
    }
    function home_cate($id){

        $data = get_product_cate($id);
        $data_cate = get_category($id);
        render_cate_details($data,$data_cate);
    }
    function home_cart(){
        render_cart();
    }
   
?>
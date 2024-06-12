<?php 

    function get_products(){
        // require'pdo.php';
        $sql = "SELECT * FROM `products`  INNER JOIN categories 
        ON `categories`.category_id = `products`.category_id";
        $result = pdo_get_all($sql);
        return $result;
    }
    function get_product($id){
        // require'pdo.php';
        $sql = "SELECT * FROM `products` WHERE `product_id`= {$id} ";
        $result = pdo_get($sql);
        return $result;
    }
    function delete_product($id){
        // require'pdo.php';
        $sql_img = "DELETE FROM `images` WHERE `product_id` = {$id}";
        pdo_excute($sql_img);
        $sql = "DELETE FROM `products` WHERE `product_id` = {$id}";
        pdo_excute($sql);
    }
    function add_product($arr){
        // require'pdo.php';
        $product_name = $arr['product_name'];
        $product_price = $arr['product_price'];
        $product_des = $arr['product_des'];
        $product_quantity = $arr['product_quantity'];
        $category_id = $arr['category_id'];
        $product_img = $arr['product_img'];
        
        $sql = "INSERT INTO `products` 
                (`product_name`, `product_price`, `product_des`, `product_quantity`, `category_id`,`product_img`)  
        VALUES ( '$product_name', $product_price, '$product_des', $product_quantity, $category_id,'$product_img')";

        $id = pdo_excute($sql);
        return $id;
    

    }
    function edit_product($arr,$id){
        // require'pdo.php';
        $product_name = $arr['product_name'];
        $product_price = $arr['product_price'];
        $product_des = $arr['product_des'];
        $product_quantity = $arr['product_quantity'];
        $category_id = $arr['category_id'];
        $product_img = $arr['product_img'];
        if(!empty($arr['product_img'])){
            $sql = "UPDATE `products`
            SET `product_name`='$product_name', 
                `product_price`=$product_price, 
                `product_des`='$product_des', 
                `product_quantity`=$product_quantity, 
                `category_id`=$category_id ,
                `product_img`='$product_img'
                WHERE `product_id` = {$id};";
        }
        else{
            $sql = "UPDATE `products`
            SET `product_name`='$product_name', 
                `product_price`=$product_price, 
                `product_des`='$product_des', 
                `product_quantity`=$product_quantity, 
                `category_id`=$category_id 
                WHERE `product_id` = {$id};";
        }
        pdo_excute($sql);

    }
    function add_product_img($id,$img){
        // require'pdo.php';
        $sql_image = "INSERT INTO `images`( `product_id`, `path`) VALUES ('$id','$img')";
        pdo_excute($sql_image);
    }
    function get_product_cate($id)  {
        $sql = "SELECT * FROM products INNER JOIN `images` ON `images`.product_id = `products`.product_id WHERE category_id = $id";
        $data = pdo_get_all($sql);
        return $data;
        }
?>
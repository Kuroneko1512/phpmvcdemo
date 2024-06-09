<?php 
function comeback_page(){
    if(isset($_SERVER['HTTP_REFERER'])) {
        // Sử dụng header để chuyển hướng đến trang trước đó
        // var_dump($_SERVER['HTTP_REFERER']);
        // die();
        header("Location: {$_SERVER['HTTP_REFERER']}");
    } else {
        // Nếu không có trang trước đó, chuyển hướng đến trang mặc định hoặc trang chính
        header("Location: index.php"); // hoặc bất kỳ URL nào bạn muốn chuyển hướng đến
    }
    exit; // Kết thúc script
}
function Authen(){
 

    if (!isset($_SESSION['user'])){
        header('Location:index.php');
    }
    if($_SESSION['role'] != 'admin'){
        header('Location:index.php');
    }
}

?>
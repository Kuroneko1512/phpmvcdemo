<?php

function pdo_contection()
{
    $servername = "127.0.0.1";
    $username = "root";
    $database = "hung_du_an_mau";
    // Tạo kết nối
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function pdo_get_all($sql)
{
    try {
        $conn = pdo_contection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        // var_dump($data);

        return $data;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_get($sql)
{
    try {

        $conn = pdo_contection();

        $stmt = $conn->prepare($sql);
        // var_dump($sql);
        // die();
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_excute($sql)
{

    try {
        $conn = pdo_contection();
        $stmt = $conn->prepare($sql);
        // var_dump($sql);
        // die();

        $stmt->execute();

        return $conn->lastInsertId();
    } catch (PDOException $e) {
        // throw $e;
        $_SESSION['error'] = "có lỗi gì đấy";
    } finally {
        unset($conn);
    }
}

pdo_contection();

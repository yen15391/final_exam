<?php
    isset($_POST["category"]) ? $category = $_POST["category"] : $category = "";
    isset($_POST["name"]) ? $name = $_POST["name"] : $name = "";
    isset($_POST["price"]) ? $price = (int)$_POST["price"] : $price = "";
    isset($_POST["detail"]) ? $detail = $_POST["detail"] : $detail = "";
    isset($_POST["action"]) ? $action = $_POST["action"] : $action = "";
    isset($_POST["id"]) ? $id = (int)$_POST["id"] : $id = "";

    $dsn = "mysql:host=localhost;dbname=productdb;charset=utf8";
    $user = "productdb_admin";
    $password = "admin123";
    
    // データベース接続オブジェクトを取得
    $pdo = new PDO($dsn, $user, $password);
    // 実行するSQLを設定
    if($action == "update"){
        $sql = "update product 
                set name = ?,price = ?, category = ?, detail = ? 
                where id = ?";
        $pstmt = $pdo->prepare($sql);
        $pstmt->bindValue(1, $name);
        $pstmt->bindValue(2, $price);
        $pstmt->bindValue(3, $category);
        $pstmt->bindValue(4, $detail);
        $pstmt->bindValue(5, $id);
        $pstmt->execute();
        echo "test";
    }elseif ($action == "delete") {
        $sql = "delete from product where id = ? ";
        $pstmt = $pdo->prepare($sql);
        $pstmt->bindValue(1, $id);
        $pstmt->execute();
        
    }else{
        $sql = "insert into product (name, price, category, detail) values (?, ?, ?, ?)";
        $pstmt = $pdo->prepare($sql);
        $pstmt->bindValue(1, $name);
        $pstmt->bindValue(2, $price);
        $pstmt->bindValue(3, $category);
        $pstmt->bindValue(4, $detail);
        // SQLを実行
        $pstmt->execute();
        
    }
    // SQL実行オブジェクトを取得
    var_dump($id);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>商品データベース</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
<header>
	<h1>商品データベース</h1>
</header>
<main id="complete">
	<h2>商品の完了</h2>
	<p>処理を完了しました。</p>
	<p><a href="top.php">トップページに戻る</a></p>
</main>
<footer>
	<div id="copyright">&copy; 2021 The Applied Course of Web System Development.</div>
</footer>
</body>
</html>
<?php
    isset($_POST["category"]) ? $category = $_POST["category"] : $category = "";
    isset($_POST["name"]) ? $name = $_POST["name"] : $name = "";
    isset($_POST["price"]) ? $price = $_POST["price"] : $price = "";
    isset($_POST["detail"]) ? $detail = $_POST["detail"] : $detail = "";
    isset($_POST["action"]) ? $action = $_POST["action"] : $action = "";
    
    
    $dsn = "mysql:host=localhost;dbname=productdb;charset=utf8";
    $user = "productdb_admin";
    $password = "admin123";
    
    // データベース接続オブジェクトを取得
    $pdo = new PDO($dsn, $user, $password);
    // 実行するSQLを設定
    $sql = "select max(id) as max from product";
    // SQL実行オブジェクトを取得
    $pstmt = $pdo->prepare($sql);
    // SQLを実行
    $pstmt->execute();
    // SQL実行結果を配列に取得
    $max = $pstmt->fetchAll(PDO::FETCH_ASSOC);
    $max = (int)$max[0][max];
    isset($_POST["id"]) ? $id = $_POST["id"] : $id = $max + 1;
    if($action == "update" || $action == "delete"){
        $sql = "select * from product where id = ?";
        $pstmt = $pdo->prepare($sql);
        $pstmt->bindValue(1, $id);
        $pstmt->execute();
        $records = $pstmt->fetchAll(PDO::FETCH_ASSOC);
        $record = $records[0];
        
        
        
    }
    var_dump($id);
    var_dump($action)
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
<main id="confirm">
	<h2>商品の確認</h2>
	<p>以下の情報で更新します。</p>
	<table class="form">
		<tr>
			<th>商品ID</th>
			<td><?= $id ?></td>
		</tr>
		<tr>
			<th>カテゴリ</th>
			<td><?= $category ?></td>
		</tr>
		<tr>
			<th>商品名</th>
			<td><?= $name ?></td>
		</tr>
		<tr>
			<th>価格</th>
			<td><?= $price ?></td>
		</tr>
		<tr>
			<th>商品説明</th>
			<td><?= $detail ?></td>
		</tr>
		
		<tr class="buttons">
			<td colspan="2">
				<form name="inputs">
				    <input type="hidden" name="category" value=<?= $category ?> >
            		<input type="hidden" name="name" value="<?= $name ?>" >
            		<input type="hidden" name="price" value="<?= $price ?>" >
            		<input type="hidden" name="detail" value="<?= $detail ?>" >
            		<input type="hidden" name="id" value="<?= $id ?>" >
					<button formaction="complete.php" formmethod="post" name="action" value="<?= $action ?>">実行する</button>
				</form>
			</td>
		</tr>
	</table>
</main>
<footer>
	<div id="copyright">&copy; 2021 The Applied Course of Web System Development.</div>
</footer>
</body>
</html>
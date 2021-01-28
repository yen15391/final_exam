<?php

    $dsn = "mysql:host=localhost;dbname=productdb;charset=utf8";
    $user = "productdb_admin";
    $password = "admin123";
    
    // データベース接続オブジェクトを取得
    $pdo = new PDO($dsn, $user, $password);
    // 実行するSQLを設定
    $sql = "select * from product";
    // SQL実行オブジェクトを取得
    $pstmt = $pdo->prepare($sql);
    // SQLを実行
    $pstmt->execute();
    // SQL実行結果を配列に取得
    $records = $pstmt->fetchAll(PDO::FETCH_ASSOC);
    
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
<main id="list">
	<h2>商品一覧</h2>
	<table class="list">
		<tr>
			<th>商品ID</th>
			<th>カテゴリ</th>
			<th>商品名</th>
			<th>価格</th>
			<th></th>
		</tr>
		<?php foreach ($records as $record): ?>
    		<tr>
    			<td><?= $record["id"] ?></td>
    			<td><?= $record["category"] ?></td>
    			<td><?= $record["name"] ?></td>
    			<td>&yen;<?= $record["price"] ?></td>
    			<td class="buttons">
    				<form name="inputs">
    					<input type="hidden" name="id" value="<?= $record["id"] ?>" />
    					<input type="hidden" name="category" value="<?= $record["category"] ?>" />
    					<input type="hidden" name="name" value="<?= $record["name"] ?>" />
    					<input type="hidden" name="price" value="<?= $record["price"] ?>" />
    					<input type="hidden" name="detail" value="<?= $record["detail"] ?>" />
    					
    					<button formaction="update.php" formmethod="post" name="action" value="update">更新</button>
    					<button formaction="confirm.php" formmethod="post" name="action" value="delete">削除</button>
    				</form>
    			</td>
    		</tr>
		<?php endforeach; ?>
		
	</table>
</main>
<footer>
	<div id="copyright">&copy; 2021 The Applied Course of Web System Development.</div>
</footer>
</body>
</html>
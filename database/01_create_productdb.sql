/**
 * 【商品データベース作成スクリプト】
 * 
 * 〈実行方法〉
 * 　　1. root権限でmysqlコマンドラインツールを起動する。
 * 　　2. sourceコマンドを使ってこのファイルを実行する。
 * 　　3. show databasesコマンドで「productdb」が作成されていることを確認する。
 * 　　4. mysqlコマンドラインツールを終了する。
 * 
 * 《データベース接続情報》
 * 　・データソースネーム：mysql:host=localhost;dbname=productdb;charset=utf8
 * 　・接続ユーザ名：productdb_admin
 * 　・接続パスワード：admin123
 */

/* データベースと接続ユーザを初期化（削除） */
drop database if exists productdb;
drop user if exists productdb_admin;
/* データベースと接続ユーザを作成 */
create database productdb;
grant all privileges on productdb.* to 'productdb_admin'@'localhost' identified by 'admin123';

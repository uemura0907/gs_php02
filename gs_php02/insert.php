<?php
$name = $_POST['name'];
$url = $_POST['url'];
$comment = $_POST['comment'];
$date = $_POST['date'];

try {
    $pdo = new PDO('mysql:dbname=gs_php_db01;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO gs_php_01(id, name, url, comment, date)VALUES(NULL, :name, :url, :comment, sysdate())");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);

$status = $stmt->execute();

if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorMessage:".$error[2]);
  }else{
    header('Location: index.php');

}
?>


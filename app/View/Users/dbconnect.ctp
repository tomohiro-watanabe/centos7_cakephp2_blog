<?php
$zipcode = $_POST['zipcode'];

// データベース接続
$host = 'localhost';
$dbname = 'blog';
$dbuser = 'root';
$dbpass = 'Wata1229!';

try {
$dbh = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8mb4", $dbuser,$dbpass, array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 var_dump($e->getMessage());
 exit;
}
// データ取得
$sql = "SELECT zipcode, pref, city, street FROM zipcodes WHERE zipcode = ?";
$stmt = ($dbh->prepare($sql));
$stmt->execute(array($zipcode));

$memberList = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 $memberList[]=array(
  'zipcode'=>$row['zipcode'],
  'pref'=>$row['pref'],
  'city'=>$row['city'],
  'street'=>$row['street']
 );
}

//jsonとして出力
header('Content-type: application/json');
echo json_encode($memberList,JSON_UNESCAPED_UNICODE);
?>

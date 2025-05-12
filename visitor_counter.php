<?php
// visitor_counter.php
$host = "localhost";
$user = "root";
$password = ""; // 설정한 비밀번호로 변경
$dbname = "portfolio_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->query("UPDATE visits SET count = count + 1 WHERE id = 1");

$result = $conn->query("SELECT count FROM visits WHERE id = 1");
$row = $result->fetch_assoc();

echo $row['count'];

$conn->close();
?>

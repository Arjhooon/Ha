<?php
include 'db_connect.php';

$stmt = $conn->prepare("SELECT sender, content, timestamp FROM messages ORDER BY timestamp ASC");
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($messages);
?>

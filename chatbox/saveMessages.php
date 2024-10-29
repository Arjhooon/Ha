<?php
// save_message.php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender = $_POST['sender'];
    $content = $_POST['content'];

    $stmt = $pdo->prepare("INSERT INTO messages (sender, content) VALUES (?, ?)");
    $stmt->execute([$sender, $content]);

    echo json_encode(['status' => 'success']);
}
?>

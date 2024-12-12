<?php
session_start();
require_once '../includes/db_connect.php';
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender_id = $_SESSION['user_id'];
    $recipient_id = $_POST['recipient_id'];
    $message = $_POST['message'];

    // Implement message sending logic here
    $result = sendMessage($pdo, $sender_id, $recipient_id, $message);

    function sendMessage($pdo, $sender_id, $recipient_id, $message) {
        $stmt = $pdo->prepare("INSERT INTO messages (sender_id, recipient_id, message) VALUES (?, ?, ?)");
        return $stmt->execute([$sender_id, $recipient_id, $message]);
    }

    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Message sent successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send message']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - People Consultancy</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main class="chat-page">
        <div class="chat-container">
            <div class="chat-sidebar">
                <h2>Conversations</h2>
                <ul class="conversation-list">
                    <!-- Conversation list items will be dynamically inserted here -->
                </ul>
            </div>
            <div class="chat-main">
                <div class="chat-header">
                    <h2>[Recipient Name]</h2>
                </div>
                <div class="chat-messages" id="chat-messages">
                    <!-- Chat messages will be dynamically inserted here -->
                </div>
                <div class="chat-input">
                    <form id="chat-form">
                        <input type="text" id="message-input" placeholder="Type your message..." required>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/chat.js"></script>
</body>
</html>
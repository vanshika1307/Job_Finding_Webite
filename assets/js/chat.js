document.addEventListener('DOMContentLoaded', function() {
    const chatForm = document.getElementById('chat-form');
    const messageInput = document.getElementById('message-input');
    const chatMessages = document.getElementById('chat-messages');

    if (chatForm && messageInput && chatMessages) {
        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const message = messageInput.value.trim();
            if (message) {
                sendMessage(message);
                messageInput.value = '';
            }
        });

        function sendMessage(message) {
            // Implement send message logic here
            console.log('Sending message:', message);
            // For now, we'll just append the message to the chat
            appendMessage(message, 'sent');
        }

        function appendMessage(message, type) {
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', type);
            messageElement.textContent = message;
            chatMessages.appendChild(messageElement);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Simulating receiving a message (remove this in production)
        setTimeout(() => {
            appendMessage('Hello! How can I help you today?', 'received');
        }, 1000);
    }
});
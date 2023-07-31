function displayMessage(sender, message) {
    const chatbox = document.getElementById('chatbox');
    chatbox.innerHTML += `<p><strong>${sender}:</strong> ${message}</p>`;
    chatbox.scrollTop = chatbox.scrollHeight; // Auto-scroll to the bottom
}

// Function to send a message
function sendMessage() {
    const messageInput = document.getElementById('message');
    const message = messageInput.value;
    if (message.trim() !== '') {
        // In a real-world application, you'd send this message to the backend
        displayMessage('You', message);
        messageInput.value = '';
    }
}
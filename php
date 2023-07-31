<?php
// In a real-world application, you'd use a database to store and retrieve messages

// In this example, we'll just save messages in a file called chatlog.txt
function saveMessage($sender, $message) {
    $log = "[$sender] $message\n";
    file_put_contents('chatlog.txt', $log, FILE_APPEND);
}

function getChatLog() {
    $chatlog = file_get_contents('chatlog.txt');
    return $chatlog;
}

// Handle incoming messages from the frontend
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender = "User"; // In a real-world application, you'd have proper user authentication
    $message = $_POST['message'];
    if ($message !== '') {
        saveMessage($sender, $message);
    }
}

// Provide the chatlog to the frontend
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo getChatLog();
}

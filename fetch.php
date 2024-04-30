<?php
// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'Anandh@18';
$dbPassword = 'Anandh123';
$dbName     = 'quizdb';

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from quizzes table
$quizzesQuery = "SELECT * FROM quizzes";
$quizzesResult = $conn->query($quizzesQuery);

if ($quizzesResult->num_rows > 0) {
    // Output data of each row
    while($row = $quizzesResult->fetch_assoc()) {
        echo "Quiz ID: " . $row["quiz_id"]. " - Quiz Name: " . $row["quiz_text"]. "<br>";
    }
} else {
    echo "0 results found in quizzes table";
}

// Fetch data from questions table
$questionsQuery = "SELECT * FROM questions";
$questionsResult = $conn->query($questionsQuery);

if ($questionsResult->num_rows > 0) {
    // Output data of each row
    while($row = $questionsResult->fetch_assoc()) {
        echo "Question ID: " . $row["question_id"]. " - Question Text: " . $row["question_text"]. "<br>";
    }
} else {
    echo "0 results found in questions table";
}

$conn->close();
?>

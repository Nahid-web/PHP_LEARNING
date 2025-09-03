<?php
$name = "";
$message = "";
$counter = isset($_COOKIE['visit_count']) ? (int)$_COOKIE['visit_count'] : 0;

// Increment visit counter and set cookie
$counter++;
setcookie('visit_count', $counter, time() + (86400 * 30)); // Cookie lasts 30 days

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $message = !empty($name) ? "Welcome, $name! Let's learn PHP!" : "Please enter a valid name.";
}

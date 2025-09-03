<?php

/**
 * Configuration file for Learning Website
 * Contains all global constants and settings
 */

// Site Configuration
define('SITE_NAME', 'Learning Hub');
define('SITE_URL', 'http://localhost:8000');
define('SITE_VERSION', '1.0.0');

// Contact Information
define('CONTACT_EMAIL', 'student@learninghub.dev');
define('GITHUB_URL', 'https://github.com/learner');
define('LINKEDIN_URL', 'https://linkedin.com/in/learner');

// Database Configuration (for future use)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'learning_website');

// File Paths
define('BASE_PATH', dirname(__DIR__));
define('ASSETS_PATH', '/assets/');
define('CSS_PATH', ASSETS_PATH . 'css/');
define('JS_PATH', ASSETS_PATH . 'js/');
define('IMG_PATH', ASSETS_PATH . 'images/');

// CDN Links
define('TAILWIND_CDN', 'https://cdn.tailwindcss.com');
define('JQUERY_CDN', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');
define('FONTAWESOME_CDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

// Site Settings
define('CURRENT_YEAR', date('Y'));
define('TIMEZONE', 'UTC');

// Set timezone
date_default_timezone_set(TIMEZONE);

// Navigation Menu
$navigation = [
    'home' => ['label' => 'Home', 'url' => 'index.php'],
    'about' => ['label' => 'About', 'url' => 'pages/about.php'],
    'projects' => ['label' => 'Projects', 'url' => 'pages/projects.php'],
    'contact' => ['label' => 'Contact', 'url' => 'pages/contact.php']
];

// Social Media Links
$social_links = [
    'github' => ['url' => GITHUB_URL, 'icon' => 'fab fa-github', 'label' => 'GitHub'],
    'linkedin' => ['url' => LINKEDIN_URL, 'icon' => 'fab fa-linkedin', 'label' => 'LinkedIn'],
    'email' => ['url' => 'mailto:' . CONTACT_EMAIL, 'icon' => 'fas fa-envelope', 'label' => 'Email']
];

// Development Settings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

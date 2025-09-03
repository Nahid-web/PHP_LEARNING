<?php

/**
 * Helper functions for the Learning Website
 */

/**
 * Get greeting based on current time
 * @return string
 */
function getGreeting()
{
    $hour = date('H');
    if ($hour < 12) {
        return "Good Morning";
    } elseif ($hour < 18) {
        return "Good Afternoon";
    } else {
        return "Good Evening";
    }
}

/**
 * Generate a random color class for elements
 * @return string
 */
function getRandomColor()
{
    $colors = ['blue', 'purple', 'green', 'red', 'yellow', 'indigo', 'pink', 'gray'];
    return $colors[array_rand($colors)];
}

/**
 * Format date in a readable format
 * @param string $date
 * @return string
 */
function formatDate($date)
{
    return date('F j, Y', strtotime($date));
}

/**
 * Get the current page name
 * @return string
 */
function getCurrentPage()
{
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    return $current_page === 'index' ? 'home' : $current_page;
}

/**
 * Check if the current page is active
 * @param string $page
 * @return string
 */
function isActive($page)
{
    return getCurrentPage() === $page ? 'active' : '';
}

/**
 * Sanitize input data
 * @param string $data
 * @return string
 */
function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Generate a random progress percentage
 * @param int $min
 * @param int $max
 * @return int
 */
function getRandomProgress($min = 60, $max = 95)
{
    return rand($min, $max);
}

/**
 * Get skill level text based on percentage
 * @param int $percentage
 * @return string
 */
function getSkillLevel($percentage)
{
    if ($percentage >= 90) return 'Expert';
    if ($percentage >= 75) return 'Advanced';
    if ($percentage >= 60) return 'Intermediate';
    if ($percentage >= 40) return 'Beginner';
    return 'Learning';
}

/**
 * Generate breadcrumb navigation
 * @param array $path
 * @return string
 */
function generateBreadcrumb($path)
{
    $breadcrumb = '<nav class="breadcrumb">';
    $breadcrumb .= '<a href="index.php" class="breadcrumb-item">Home</a>';

    foreach ($path as $item) {
        $breadcrumb .= ' / <span class="breadcrumb-item current">' . $item . '</span>';
    }

    $breadcrumb .= '</nav>';
    return $breadcrumb;
}

/**
 * Calculate reading time for content
 * @param string $content
 * @return int
 */
function calculateReadingTime($content)
{
    $words = str_word_count(strip_tags($content));
    $reading_time = ceil($words / 200); // Average reading speed: 200 words per minute
    return max(1, $reading_time);
}

/**
 * Generate a slug from a string
 * @param string $string
 * @return string
 */
function generateSlug($string)
{
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    return $slug;
}

/**
 * Get age from birth date
 * @param string $birthdate
 * @return int
 */
function getAge($birthdate)
{
    $today = new DateTime();
    $birth = new DateTime($birthdate);
    return $birth->diff($today)->years;
}

/**
 * Format file size
 * @param int $bytes
 * @param int $precision
 * @return string
 */
function formatFileSize($bytes, $precision = 2)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, $precision) . ' ' . $units[$i];
}

/**
 * Debug helper function
 * @param mixed $data
 * @param bool $exit
 */
function debug($data, $exit = false)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    if ($exit) exit;
}

/**
 * Get visitor's IP address
 * @return string
 */
function getVisitorIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

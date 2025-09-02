<?php
// components/header.php
function renderHeader($title = "PHP Learning Hub")
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>

    <body class="bg-gray-100">
        <header class="bg-blue-600 text-white shadow-lg">
            <div class="container mx-auto px-4 py-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex items-center mb-4 md:mb-0">
                        <i class="fas fa-graduation-cap text-2xl mr-3"></i>
                        <h1 class="text-2xl font-bold">PHP Learning Hub</h1>
                    </div>
                    <nav>
                        <ul class="flex space-x-6">
                            <li><a href="/PHP_LEARNING/index.php" class="hover:text-blue-200 transition">Home</a></li>
                            <li><a href="/PHP_LEARNING/pages/tutorials.php" class="hover:text-blue-200 transition">Tutorials</a></li>
                            <li><a href="/PHP_LEARNING/pages/examples.php" class="hover:text-blue-200 transition">Examples</a></li>
                            <li><a href="/PHP_LEARNING/pages/contact.php" class="hover:text-blue-200 transition">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    <?php
}
    ?>
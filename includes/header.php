<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learning web development with PHP, HTML, Tailwind CSS, and jQuery">
    <meta name="keywords" content="PHP, HTML, CSS, JavaScript, jQuery, Tailwind, Web Development, Learning">
    <meta name="author" content="<?php echo SITE_NAME; ?>">

    <title><?php echo isset($page_title) ? $page_title : SITE_NAME; ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo IMG_PATH; ?>favicon.ico">

    <!-- External CSS -->
    <script src="<?php echo TAILWIND_CDN; ?>"></script>
    <link rel="stylesheet" href="<?php echo FONTAWESOME_CDN; ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>custom.css">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-gentle': 'bounceGentle 2s infinite',
                        'pulse-slow': 'pulse 3s infinite'
                    },
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb'
                        }
                    }
                }
            }
        }
    </script>

    <!-- jQuery -->
    <script src="<?php echo JQUERY_CDN; ?>"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">

    <!-- Navigation -->
    <nav class="navbar">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="logo-icon">
                        <i class="fas fa-code text-white text-lg"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-800"><?php echo SITE_NAME; ?></h1>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-6">
                    <?php foreach ($navigation as $key => $nav): ?>
                        <a href="<?php echo $nav['url']; ?>"
                            class="nav-link <?php echo isActive($key); ?>">
                            <?php echo $nav['label']; ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 hamburger">
                    <div class="hamburger-line"></div>
                    <div class="hamburger-line"></div>
                    <div class="hamburger-line"></div>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu">
        <div class="px-4 py-2">
            <?php foreach ($navigation as $key => $nav): ?>
                <a href="<?php echo $nav['url']; ?>"
                    class="block py-3 text-gray-600 hover:text-blue-600 border-b border-gray-100 last:border-0">
                    <?php echo $nav['label']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Page Content Wrapper -->
    <main class="main-content">
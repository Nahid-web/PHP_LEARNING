<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP - About</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <?php include 'includes/header.php'; ?>

    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">About This Project</h1>
            <p class="text-gray-600">This is a simple static website built to learn PHP, HTML, Tailwind CSS, JavaScript, and jQuery. It demonstrates reusable components, form handling, and dynamic content.</p>
            <!-- Dynamic Date Display -->
            <p id="dateDisplay" class="text-gray-600 mt-4">Loading date...</p>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Custom JavaScript -->
    <script src="js/scripts.js"></script>
</body>

</html>
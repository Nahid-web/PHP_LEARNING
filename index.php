<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP - Home</title>
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
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Welcome to Learn PHP</h1>

            <!-- PHP Form Handling -->
            <?php require 'includes/form_handler.php'; ?>

            <!-- Form -->
            <div class="mb-4">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-4">
                    <label for="name" class="block text-gray-700">Your Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
                </form>
            </div>

            <!-- PHP Message Output -->
            <?php if (!empty($message)): ?>
                <p class="text-green-600"><?php echo $message; ?></p>
            <?php endif; ?>

            <!-- Visit Counter -->
            <p id="counter" class="text-gray-600 mt-4">Page Visits: <?php echo $counter; ?></p>

            <!-- Toggleable Message -->
            <button id="toggleBtn" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mt-4">Toggle Message</button>
            <p id="toggleMessage" class="text-blue-600 mt-4 hidden">This message is toggled with jQuery!</p>

            <!-- Dynamic Date Display -->
            <p id="dateDisplay" class="text-gray-600 mt-4">Loading date...</p>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Custom JavaScript -->
    <script src="js/scripts.js"></script>
</body>

</html>
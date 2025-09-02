<?php
// tutorials.php
include '../components/header.php';
renderHeader("Tutorials - PHP Learning Hub");
?>

<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8">PHP Tutorials</h1>

        <div class="bg-white rounded-lg shadow-lg p-8 max-w-3xl mx-auto">
            <h2 class="text-2xl font-semibold mb-4">Getting Started with PHP</h2>
            <p class="mb-4">PHP is a server-side scripting language designed for web development. Here's a simple example:</p>

            <pre class="bg-gray-800 text-green-400 p-4 rounded mb-4">
<?php
echo "Hello, World!";
?>
                </pre>

            <h3 class="text-xl font-semibold mt-6 mb-3">Key Concepts</h3>
            <ul class="list-disc pl-6 space-y-2">
                <li>Variables start with $ symbol</li>
                <li>Loose typing system</li>
                <li>Built-in functions for common tasks</li>
                <li>Support for databases and file handling</li>
            </ul>
        </div>
    </div>
</section>

<?php
include '../components/footer.php';
renderFooter();
?>
<?php
// index.php
include 'components/header.php';
include 'components/card.php';
include 'components/feature-box.php';

renderHeader("Home - PHP Learning Hub");
?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-500 to-indigo-700 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Learn PHP & Web Development</h1>
        <p class="text-xl mb-8 max-w-2xl mx-auto">A comprehensive guide to mastering PHP, HTML, CSS, JavaScript, and jQuery</p>
        <button id="startBtn" class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full hover:bg-blue-100 transition transform hover:scale-105">
            Get Started
        </button>
    </div>
</section>

<!-- PHP Examples Section -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">PHP Examples</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            renderCard(
                "fa-calendar-alt",
                "Current Date",
                "Today is " . date("l, F d, Y"),
                "blue"
            );

            renderCard(
                "fa-server",
                "Server Information",
                "Server: " . $_SERVER['SERVER_SOFTWARE'],
                "green"
            );

            renderCard(
                "fa-calculator",
                "Math Functions",
                "Square root of 25 is " . sqrt(25),
                "purple"
            );
            ?>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">What You'll Learn</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            renderFeatureBox(
                "fa-php",
                "PHP Basics",
                "Variables, functions, arrays, and control structures",
                "blue"
            );

            renderFeatureBox(
                "fa-html5",
                "HTML Fundamentals",
                "Semantic markup and document structure",
                "green"
            );

            renderFeatureBox(
                "fa-css3-alt",
                "CSS Styling",
                "Layouts, animations, and responsive design",
                "yellow"
            );

            renderFeatureBox(
                "fa-js",
                "JavaScript & jQuery",
                "DOM manipulation and interactive features",
                "purple"
            );
            ?>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#startBtn').click(function() {
            $('html, body').animate({
                scrollTop: $('.grid').first().offset().top - 100
            }, 1000);
        });
    });
</script>

<?php
include 'components/footer.php';
renderFooter();
?>
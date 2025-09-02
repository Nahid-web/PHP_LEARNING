<?php
// examples.php
include '../components/header.php';
include '../components/card.php';
renderHeader("Examples - PHP Learning Hub");
?>

<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8">PHP Examples</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php
            renderCard(
                "fa-database",
                "Database Connection",
                '$conn = new mysqli("localhost", "user", "pass", "db");',
                "blue"
            );

            renderCard(
                "fa-file-upload",
                "File Upload",
                'if(move_uploaded_file($_FILES["file"]["tmp_name"], $target)) { ... }',
                "green"
            );

            renderCard(
                "fa-envelope",
                "Email Function",
                'mail($to, $subject, $message, $headers);',
                "yellow"
            );

            renderCard(
                "fa-lock",
                "Session Management",
                'session_start(); $_SESSION["user"] = "John";',
                "purple"
            );
            ?>
        </div>
    </div>
</section>

<?php
include 'components/footer.php';
renderFooter();
?>
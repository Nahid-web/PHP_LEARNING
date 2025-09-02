<?php
// components/card.php
function renderCard($icon, $title, $content, $color = "blue")
{
    $colors = [
        "blue" => "text-blue-500",
        "green" => "text-green-500",
        "purple" => "text-purple-500",
        "yellow" => "text-yellow-500"
    ];
    $iconColor = $colors[$color] ?? $colors["blue"];
?>
    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
        <div class="text-center mb-4">
            <i class="fas <?php echo $icon; ?> text-3xl <?php echo $iconColor; ?>"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-center"><?php echo $title; ?></h3>
        <p class="text-center text-gray-600"><?php echo $content; ?></p>
    </div>
<?php
}
?>
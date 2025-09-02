<?php
// components/feature-box.php
function renderFeatureBox($icon, $title, $description, $color = "blue")
{
    $bgColors = [
        "blue" => "bg-blue-100",
        "green" => "bg-green-100",
        "yellow" => "bg-yellow-100",
        "purple" => "bg-purple-100"
    ];
    $textColors = [
        "blue" => "text-blue-600",
        "green" => "text-green-600",
        "yellow" => "text-yellow-600",
        "purple" => "text-purple-600"
    ];
    $bgColor = $bgColors[$color] ?? $bgColors["blue"];
    $textColor = $textColors[$color] ?? $textColors["blue"];
?>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <div class="w-16 h-16 <?php echo $bgColor; ?> rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fab <?php echo $icon; ?> <?php echo $textColor; ?> text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2"><?php echo $title; ?></h3>
        <p class="text-gray-600"><?php echo $description; ?></p>
    </div>
<?php
}
?>
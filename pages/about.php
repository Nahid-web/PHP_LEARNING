<?php
require_once '../config/config.php';
require_once '../includes/functions.php';
require_once '../data/content.php';

$current_page = 'about';
$page_title = 'About Me - ' . SITE_NAME;
?>

<?php include '../includes/header.php'; ?>

<!-- About Hero Section -->
<section class="py-20 px-4 bg-gradient-to-br from-blue-50 to-indigo-100">
    <div class="max-w-4xl mx-auto text-center">
        <div class="animate-fade-in">
            <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mx-auto mb-8 flex items-center justify-center text-6xl text-white">
                👨‍💻
            </div>
            <h1 class="text-5xl font-bold text-gray-800 mb-6">About Me</h1>
            <p class="text-xl text-gray-600 mb-8">
                Passionate web developer on a journey to master modern web technologies
            </p>
        </div>
    </div>
</section>

<!-- Bio Section -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">My Journey</h2>
                <div class="prose text-gray-600 space-y-4">
                    <p>
                        Hello! I'm a dedicated web development student with a passion for creating
                        beautiful, functional websites. My journey began in early 2024 when I
                        discovered the exciting world of web development.
                    </p>
                    <p>
                        I believe in learning by doing, which is why I built this website from
                        scratch using <strong>PHP</strong>, <strong>HTML</strong>,
                        <strong>Tailwind CSS</strong>, and <strong>jQuery</strong>. Every line
                        of code represents hours of learning, experimenting, and problem-solving.
                    </p>
                    <p>
                        My goal is to become a full-stack developer who can build complete web
                        applications that make a positive impact on people's lives. I'm particularly
                        interested in responsive design, user experience, and clean, maintainable code.
                    </p>
                </div>
            </div>
            <div class="space-y-6">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-100">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Quick Facts</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>
                            Started coding: January 2024
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>
                            Location: Rajshahi, Bangladesh
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-heart text-blue-600 mr-3"></i>
                            Loves: Clean code & coffee
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock text-blue-600 mr-3"></i>
                            Learning hours: <?php echo $site_stats['learning_hours']; ?>+
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-lg border border-purple-100">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Current Focus</h3>
                    <div class="space-y-2">
                        <span class="inline-block bg-purple-600 text-white text-sm px-3 py-1 rounded-full">Backend Development</span>
                        <span class="inline-block bg-blue-600 text-white text-sm px-3 py-1 rounded-full">Database Design</span>
                        <span class="inline-block bg-green-600 text-white text-sm px-3 py-1 rounded-full">API Integration</span>
                        <span class="inline-block bg-orange-600 text-white text-sm px-3 py-1 rounded-full">Version Control</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Progress Section -->
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <h2 class="section-title">Skills & Progress</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php foreach ($skills as $skill): ?>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white mr-4">
                            <i class="<?php echo $skill['icon']; ?>"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-800"><?php echo $skill['name']; ?></h3>
                            <p class="text-gray-600 text-sm"><?php echo $skill['description']; ?></p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600"><?php echo getSkillLevel($skill['level']); ?></span>
                            <span class="text-gray-800 font-medium"><?php echo $skill['level']; ?>%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="skill-progress-bar" style="width: <?php echo $skill['level']; ?>%"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Learning Timeline -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-4xl mx-auto">
        <h2 class="section-title">Learning Timeline</h2>
        <div class="relative">
            <!-- Timeline line -->
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-500 to-purple-600"></div>

            <div class="space-y-8">
                <div class="flex items-start">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center text-white text-2xl mr-6 z-10 relative">
                        🎯
                    </div>
                    <div class="flex-1">
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-lg border border-green-100">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Started Web Development</h3>
                            <p class="text-green-600 font-medium mb-2">January 2024</p>
                            <p class="text-gray-600">Began learning HTML and CSS basics, created my first simple webpage.</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white text-2xl mr-6 z-10 relative">
                        🎨
                    </div>
                    <div class="flex-1">
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-100">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Discovered Tailwind CSS</h3>
                            <p class="text-blue-600 font-medium mb-2">February 2024</p>
                            <p class="text-gray-600">Learned utility-first CSS and started creating responsive, modern designs.</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-white text-2xl mr-6 z-10 relative">
                        ⚡
                    </div>
                    <div class="flex-1">
                        <div class="bg-gradient-to-r from-yellow-50 to-amber-50 p-6 rounded-lg border border-yellow-100">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">JavaScript & jQuery</h3>
                            <p class="text-yellow-600 font-medium mb-2">February 2024</p>
                            <p class="text-gray-600">Added interactivity to websites with JavaScript and jQuery animations.</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center text-white text-2xl mr-6 z-10 relative">
                        🐘
                    </div>
                    <div class="flex-1">
                        <div class="bg-gradient-to-r from-purple-50 to-violet-50 p-6 rounded-lg border border-purple-100">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Backend with PHP</h3>
                            <p class="text-purple-600 font-medium mb-2">March 2024</p>
                            <p class="text-gray-600">Started server-side development with PHP, learned about dynamic content generation.</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white text-2xl mr-6 z-10 relative">
                        🚀
                    </div>
                    <div class="flex-1">
                        <div class="bg-gradient-to-r from-blue-50 to-purple-50 p-6 rounded-lg border border-blue-200">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Built This Portfolio</h3>
                            <p class="text-blue-600 font-medium mb-2">March 2024 - Present</p>
                            <p class="text-gray-600">Created this comprehensive website showcasing all learned technologies working together.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <h2 class="section-title">Achievements</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($achievements as $achievement): ?>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="<?php echo $achievement['badge_color']; ?> w-16 h-16 rounded-full flex items-center justify-center text-white text-2xl mb-4 mx-auto">
                        <?php echo $achievement['icon']; ?>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 text-center"><?php echo $achievement['title']; ?></h3>
                    <p class="text-gray-600 text-sm text-center mb-3"><?php echo $achievement['description']; ?></p>
                    <p class="text-blue-600 text-sm text-center font-medium"><?php echo formatDate($achievement['date']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Learning Resources -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="section-title">Learning Resources</h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Here are some of the resources that have been instrumental in my learning journey
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($learning_resources as $resource): ?>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl text-center mb-4"><?php echo $resource['icon']; ?></div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 text-center"><?php echo $resource['title']; ?></h3>
                    <p class="text-gray-600 text-sm text-center mb-4"><?php echo $resource['description']; ?></p>
                    <div class="text-center">
                        <a href="<?php echo $resource['url']; ?>"
                            target="_blank"
                            rel="noopener"
                            class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-full transition-colors duration-300">
                            Visit Resource
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
<?php
require_once '../config/config.php';
require_once '../includes/functions.php';
require_once '../data/content.php';

$current_page = 'projects';
$page_title = 'My Projects - ' . SITE_NAME;
?>

<?php include '../includes/header.php'; ?>

<!-- Projects Hero Section -->
<section class="py-20 px-4 bg-gradient-to-br from-blue-50 to-indigo-100">
    <div class="max-w-4xl mx-auto text-center">
        <div class="animate-fade-in-up">
            <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mx-auto mb-8 flex items-center justify-center text-6xl text-white">
                <i class="fas fa-rocket"></i>
            </div>
            <h1 class="text-5xl font-bold text-gray-800 mb-6">My Projects</h1>
            <p class="text-xl text-gray-600 mb-8">
                A showcase of my web development journey and learning projects
            </p>
        </div>
    </div>
</section>

<!-- Projects Showcase Section -->
<section class="py-20 px-4 bg-white animate-fade-in-up">
    <div class="max-w-6xl mx-auto">
        <h2 class="section-title">Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($projects as $project): ?>
                <div class="project-card hover:shadow-lg transition-shadow duration-300">
                    <div class="project-image">
                        <div class="text-white text-6xl"><?php echo $project['icon']; ?></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2"><?php echo $project['name']; ?></h3>
                        <p class="text-gray-600 mb-3">Built with: <span class="highlight-text"><?php echo $project['tech']; ?></span></p>
                        <p class="text-gray-600 mb-4"><?php echo $project['description']; ?></p>

                        <!-- Project Features -->
                        <div class="mb-4">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Key Features:</h4>
                            <ul class="list-disc list-inside text-gray-600 text-sm">
                                <?php foreach ($project['features'] as $feature): ?>
                                    <li><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Project Status -->
                        <div class="flex items-center justify-between">
                            <span class="status-badge status-<?php echo strtolower(str_replace(' ', '-', $project['status'])); ?>">
                                <?php echo $project['status']; ?>
                            </span>

                            <!-- Project Links -->
                            <div class="flex space-x-2">
                                <a href="<?php echo $project['github']; ?>" class="text-gray-600 hover:text-gray-900" title="View on GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="<?php echo $project['demo']; ?>" class="text-blue-600 hover:text-blue-800" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="py-20 px-4 bg-gray-50 animate-fade-in-up">
    <div class="max-w-6xl mx-auto">
        <h2 class="section-title">Technologies I Use</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($skills as $index => $skill): ?>
                <div class="skill-card">
                    <div class="skill-icon" style="background: linear-gradient(to right, var(--color-<?php echo getRandomColor(); ?>-500), var(--color-<?php echo getRandomColor(); ?>-600));">
                        <i class="<?php echo $skill['icon'] ?? 'fas fa-code'; ?>"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2"><?php echo $skill['name']; ?></h4>
                    <p class="text-gray-600 mb-3"><?php echo $skill['description']; ?></p>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" style="width: <?php echo $skill['level'] ?? getRandomProgress(); ?>%"></div>
                    </div>
                    <span class="skill-level"><?php echo getSkillLevel($skill['level'] ?? getRandomProgress()); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Future Projects Section -->
<section class="py-20 px-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white animate-fade-in-up">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">What's Next?</h2>
        <p class="text-xl opacity-90 mb-8">
            I'm constantly learning and building new projects. Here are some ideas I'm planning to work on next:
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white bg-opacity-10 p-6 rounded-lg border border-white border-opacity-20">
                <div class="text-4xl mb-4"><i class="fas fa-shopping-cart"></i></div>
                <h3 class="text-2xl font-semibold mb-2">E-Commerce Platform</h3>
                <p class="opacity-80">A full-featured online store with product catalog, shopping cart, and checkout system.</p>
            </div>
            <div class="bg-white bg-opacity-10 p-6 rounded-lg border border-white border-opacity-20">
                <div class="text-4xl mb-4"><i class="fas fa-mobile-alt"></i></div>
                <h3 class="text-2xl font-semibold mb-2">Mobile App Integration</h3>
                <p class="opacity-80">Creating a RESTful API to connect web services with mobile applications.</p>
            </div>
        </div>
        <div class="mt-12">
            <a href="../pages/contact.php" class="btn-white">Have a Project Idea? Let's Talk!</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
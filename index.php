<?php
// Include configuration and functions
require_once 'config/config.php';
require_once 'includes/functions.php';
require_once 'data/content.php';

// Get current page
$current_page = 'home';
$page_title = SITE_NAME . ' - Learning Web Development';
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="home" class="hero-section py-20 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <div class="animate-fade-in">
            <h2 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
                <?php echo getGreeting(); ?>! 👋
            </h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Welcome to my learning journey in web development. This site demonstrates
                <span class="highlight-text">PHP</span>,
                <span class="highlight-text">HTML</span>,
                <span class="highlight-text">Tailwind CSS</span>, and
                <span class="highlight-text">jQuery</span> working together.
            </p>
            <button id="scroll-btn" class="btn-primary">
                Explore My Journey
            </button>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
        <h3 class="section-title">My Skills</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($skills as $index => $skill): ?>
                <div class="skill-card">
                    <div class="skill-icon">
                        <?php echo $index + 1; ?>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2"><?php echo $skill['name']; ?></h4>
                    <p class="text-gray-600 mb-3"><?php echo $skill['description']; ?></p>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" style="width: <?php echo $skill['level']; ?>%"></div>
                    </div>
                    <span class="skill-level"><?php echo $skill['level']; ?>%</span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <h3 class="section-title">My Projects</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <div class="project-image">
                        <div class="text-white text-6xl"><?php echo $project['icon']; ?></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2"><?php echo $project['name']; ?></h4>
                        <p class="text-gray-600 mb-3">Built with: <span class="highlight-text"><?php echo $project['tech']; ?></span></p>
                        <p class="text-gray-600 mb-4"><?php echo $project['description']; ?></p>
                        <span class="status-badge status-<?php echo strtolower(str_replace(' ', '-', $project['status'])); ?>">
                            <?php echo $project['status']; ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Interactive Counter Section -->
<section class="py-20 px-4 bg-gradient-to-r from-blue-500 to-purple-600">
    <div class="max-w-4xl mx-auto text-center text-white">
        <h3 class="text-4xl font-bold mb-8">Interactive Counter (jQuery Demo)</h3>
        <div class="counter-container">
            <div class="text-6xl font-bold mb-4" id="counter">0</div>
            <div class="counter-controls">
                <button id="decrease-btn" class="btn-counter btn-red">Decrease -</button>
                <button id="reset-btn" class="btn-counter btn-gray">Reset</button>
                <button id="increase-btn" class="btn-counter btn-green">+ Increase</button>
            </div>
        </div>
        <p class="text-lg opacity-90 mt-6">This counter demonstrates jQuery event handling and DOM manipulation!</p>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div class="stat-card">
                <div class="stat-number" data-target="<?php echo count($skills); ?>">0</div>
                <div class="stat-label">Skills Learned</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="<?php echo count($projects); ?>">0</div>
                <div class="stat-label">Projects Built</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="<?php echo date('Y') - 2023; ?>">0</div>
                <div class="stat-label">Years Learning</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="100">0</div>
                <div class="stat-label">Motivation %</div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
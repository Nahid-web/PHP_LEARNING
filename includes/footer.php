</main>
<!-- End Page Content Wrapper -->

<!-- Contact Section -->
<section id="contact" class="py-20 px-4 bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <h3 class="section-title">Get In Touch</h3>
        <div class="contact-container">
            <p class="text-lg text-gray-700 mb-6">
                This website was built on <strong><?php echo formatDate('today'); ?></strong> using modern web technologies.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <?php foreach ($social_links as $platform => $link): ?>
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="<?php echo $link['icon']; ?>"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2"><?php echo $link['label']; ?></h4>
                        <a href="<?php echo $link['url']; ?>"
                            class="text-blue-600 hover:text-blue-800 transition-colors duration-300"
                            target="_blank" rel="noopener">
                            <?php echo $platform === 'email' ? CONTACT_EMAIL : 'View Profile'; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <button id="contact-btn" class="btn-primary">
                Say Hello! 👋
            </button>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="max-w-6xl mx-auto px-4">
        <div class="footer-content">
            <!-- Footer Brand -->
            <div class="footer-brand">
                <h3 class="text-xl font-bold text-white mb-2"><?php echo SITE_NAME; ?></h3>
                <p class="text-gray-300 mb-4">Learning web development one step at a time.</p>
                <div class="flex space-x-4">
                    <?php foreach ($social_links as $platform => $link): ?>
                        <a href="<?php echo $link['url']; ?>"
                            class="footer-social-link"
                            target="_blank" rel="noopener">
                            <i class="<?php echo $link['icon']; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <?php foreach ($navigation as $key => $nav): ?>
                        <li>
                            <a href="<?php echo $nav['url']; ?>" class="footer-link">
                                <?php echo $nav['label']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Technologies -->
            <div class="footer-tech">
                <h4 class="text-lg font-semibold text-white mb-4">Built With</h4>
                <div class="flex flex-wrap gap-2">
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">HTML5</span>
                    <span class="tech-badge">Tailwind CSS</span>
                    <span class="tech-badge">jQuery</span>
                    <span class="tech-badge">JavaScript</span>
                </div>
            </div>

            <!-- Site Info -->
            <div class="footer-info">
                <h4 class="text-lg font-semibold text-white mb-4">Site Info</h4>
                <ul class="text-gray-300 text-sm space-y-1">
                    <li>Version: <?php echo SITE_VERSION; ?></li>
                    <li>Last Updated: <?php echo formatDate('today'); ?></li>
                    <li>Visitors: <span id="visitor-count">Loading...</span></li>
                    <li>Your IP: <?php echo getVisitorIP(); ?></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    &copy; <?php echo CURRENT_YEAR; ?> <?php echo SITE_NAME; ?>. Built with ❤️ for learning.
                </p>
                <p class="text-gray-400 text-sm mt-2 md:mt-0">
                    <i class="fas fa-clock mr-1"></i>
                    Page loaded in <span id="load-time">0.00</span> seconds
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- Loading Overlay -->
<div id="loading-overlay" class="loading-overlay">
    <div class="loading-spinner">
        <div class="spinner"></div>
        <p class="mt-4 text-white">Loading...</p>
    </div>
</div>

<!-- Custom JavaScript -->
<script src="<?php echo JS_PATH; ?>main.js"></script>

<!-- Page Load Time Calculation -->
<script>
    $(document).ready(function() {
        // Calculate and display page load time
        const loadTime = (Date.now() - performance.timing.navigationStart) / 1000;
        $('#load-time').text(loadTime.toFixed(2));

        // Hide loading overlay
        $('#loading-overlay').fadeOut(300);

        // Simulate visitor counter (in real app, this would be from database)
        const visitorCount = Math.floor(Math.random() * 1000) + 500;
        $('#visitor-count').text(visitorCount.toLocaleString());
    });
</script>
</body>

</html>
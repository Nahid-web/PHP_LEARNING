/**
 * Main JavaScript file for Learning Website
 * Contains all interactive functionality using jQuery
 */

$(document).ready(function() {
    'use strict';
    
    console.log('🚀 Learning Hub loaded successfully!');
    
    // ========================================
    // GLOBAL VARIABLES
    // ========================================
    
    let counter = 0;
    let isScrolling = false;
    const $window = $(window);
    const $document = $(document);
    const $body = $('body');
    
    // ========================================
    // NAVIGATION FUNCTIONALITY
    // ========================================
    
    // Mobile menu toggle
    $('#mobile-menu-btn').click(function(e) {
        e.preventDefault();
        const $mobileMenu = $('#mobile-menu');
        const $hamburger = $(this);
        
        $mobileMenu.slideToggle(300);
        $hamburger.toggleClass('active');
    });
    
    // Smooth scrolling for navigation links
    $('.nav-link, a[href^="#"]').click(function(e) {
        const href = $(this).attr('href');
        
        // Only handle hash links
        if (href && href.startsWith('#')) {
            e.preventDefault();
            const target = $(href);
            
            if (target.length) {
                const offsetTop = target.offset().top - 80;
                
                $('html, body').animate({
                    scrollTop: offsetTop
                }, {
                    duration: 800,
                    easing: 'swing'
                });
            }
            
            // Close mobile menu
            $('#mobile-menu').slideUp(300);
            $('#mobile-menu-btn').removeClass('active');
        }
    });
    
    // Navbar scroll effect
    $window.scroll(function() {
        const scrollTop = $window.scrollTop();
        const $navbar = $('.navbar');
        
        if (scrollTop > 50) {
            $navbar.addClass('scrolled');
        } else {
            $navbar.removeClass('scrolled');
        }
    });
    
    // ========================================
    // COUNTER FUNCTIONALITY
    // ========================================
    
    function updateCounter(value) {
        counter = value;
        const $counterEl = $('#counter');
        $counterEl.text(counter);
        
        // Add animation class
        $counterEl.addClass('animate-bounce');
        setTimeout(() => {
            $counterEl.removeClass('animate-bounce');
        }, 500);
    }
    
    $('#increase-btn').click(function() {
        updateCounter(counter + 1);
    });
    
    $('#decrease-btn').click(function() {
        updateCounter(counter - 1);
    });
    
    $('#reset-btn').click(function() {
        const $counterEl = $('#counter');
        updateCounter(0);
        
        // Special animation for reset
        $counterEl.removeClass('animate-bounce').addClass('animate-spin');
        setTimeout(() => {
            $counterEl.removeClass('animate-spin');
        }, 500);
    });
    
    // ========================================
    // SCROLL ANIMATIONS
    // ========================================
    
    function checkScrollAnimations() {
        if (isScrolling) return;
        
        isScrolling = true;
        
        $('.skill-card, .project-card, .contact-info, .stat-card').each(function() {
            const $element = $(this);
            const elementTop = $element.offset().top;
            const elementBottom = elementTop + $element.outerHeight();
            const viewportTop = $window.scrollTop();
            const viewportBottom = viewportTop + $window.height();
            
            // Check if element is in viewport
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                if (!$element.hasClass('animate-slide-up')) {
                    $element.addClass('animate-slide-up');
                }
            }
        });
        
        setTimeout(() => {
            isScrolling = false;
        }, 100);
    }
    
    $window.scroll(checkScrollAnimations);
    
    // ========================================
    // ANIMATED COUNTERS FOR STATS
    // ========================================
    
    function animateCounters() {
        $('.stat-number').each(function() {
            const $this = $(this);
            const target = parseInt($this.data('target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                $this.text(Math.floor(current));
            }, 16);
        });
    }
    
    // Trigger counter animation when stats section is visible
    $window.scroll(function() {
        const $statsSection = $('.stat-card').first().closest('section');
        if ($statsSection.length) {
            const sectionTop = $statsSection.offset().top;
            const sectionBottom = sectionTop + $statsSection.outerHeight();
            const viewportTop = $window.scrollTop();
            const viewportBottom = viewportTop + $window.height();
            
            if (sectionBottom > viewportTop && sectionTop < viewportBottom) {
                if (!$statsSection.hasClass('animated')) {
                    $statsSection.addClass('animated');
                    setTimeout(animateCounters, 500);
                }
            }
        }
    });
    
    // ========================================
    // SKILL PROGRESS BARS ANIMATION
    // ========================================
    
    function animateSkillBars() {
        $('.skill-progress-bar').each(function() {
            const $bar = $(this);
            const width = $bar.attr('style').match(/width:\s*(\d+)%/);
            
            if (width) {
                const targetWidth = parseInt(width[1]);
                $bar.css('width', '0%');
                
                setTimeout(() => {
                    $bar.animate({
                        width: targetWidth + '%'
                    }, 1500, 'easeOutCubic');
                }, Math.random() * 500);
            }
        });
    }
    
    // Trigger skill bar animation when skills section is visible
    let skillsAnimated = false;
    $window.scroll(function() {
        if (skillsAnimated) return;
        
        const $skillsSection = $('#skills');
        if ($skillsSection.length) {
            const sectionTop = $skillsSection.offset().top;
            const sectionBottom = sectionTop + $skillsSection.outerHeight();
            const viewportTop = $window.scrollTop();
            const viewportBottom = viewportTop + $window.height();
            
            if (sectionBottom > viewportTop && sectionTop < viewportBottom) {
                skillsAnimated = true;
                setTimeout(animateSkillBars, 300);
            }
        }
    });
    
    // ========================================
    // INTERACTIVE HOVER EFFECTS
    // ========================================
    
    // Skill cards pulse effect
    $('.skill-card').hover(
        function() { 
            $(this).addClass('animate-pulse'); 
        },
        function() { 
            $(this).removeClass('animate-pulse'); 
        }
    );
    
    // Project cards icon change
    $('.project-card').hover(
        function() { 
            const $icon = $(this).find('.text-6xl');
            const originalIcon = $icon.text();
            $icon.data('original', originalIcon).text('🚀');
        },
        function() { 
            const $icon = $(this).find('.text-6xl');
            const original = $icon.data('original') || '📁';
            $icon.text(original);
        }
    );
    
    // ========================================
    // CONTACT BUTTON INTERACTION
    // ========================================
    
    $('#contact-btn').click(function(e) {
        e.preventDefault();
        const $btn = $(this);
        
        // Show alert (in real app, this would open a contact modal)
        alert('Thanks for your interest! 📧\n\nThis is a demo contact button.\nIn a real application, this would open a contact form or modal.');
        
        // Button animation
        $btn.removeClass('animate-pulse').addClass('animate-bounce');
        setTimeout(() => {
            $btn.removeClass('animate-bounce');
        }, 1000);
    });
    
    // ========================================
    // SCROLL TO TOP FUNCTIONALITY
    // ========================================
    
    const $backToTop = $('#back-to-top');
    
    // Show/hide back to top button
    $window.scroll(function() {
        if ($window.scrollTop() > 300) {
            $backToTop.addClass('visible');
        } else {
            $backToTop.removeClass('visible');
        }
    });
    
    // Scroll to top click handler
    $backToTop.click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 800, 'swing');
    });
    
    // ========================================
    // SMOOTH SCROLL TO SECTIONS
    // ========================================
    
    $('#scroll-btn').click(function(e) {
        e.preventDefault();
        const $skillsSection = $('#skills');
        
        if ($skillsSection.length) {
            $('html, body').animate({
                scrollTop: $skillsSection.offset().top - 80
            }, 800, 'swing');
        }
    });
    
    // ========================================
    // EASTER EGG FUNCTIONALITY
    // ========================================
    
    let logoClickCount = 0;
    $('.logo-icon').click(function() {
        logoClickCount++;
        $(this).addClass('animate-spin');
        
        setTimeout(() => {
            $(this).removeClass('animate-spin');
        }, 500);
        
        if (logoClickCount === 5) {
            $body.addClass('animate-pulse');
            
            // Create confetti effect
            createConfetti();
            
            alert('🎉 Easter Egg Discovered! 🥚\n\nYou found the secret by clicking the logo 5 times!\nYou\'re clearly paying attention to details - great quality for a developer!');
            
            setTimeout(() => {
                $body.removeClass('animate-pulse');
            }, 2000);
            
            logoClickCount = 0;
        }
    });
    
    // ========================================
    // CONFETTI EFFECT
    // ========================================
    
    function createConfetti() {
        const colors = ['#FF6B6B', '#4ECDC4', '#45B7D1', '#96CEB4', '#FFEAA7'];
        const confettiCount = 50;
        
        for (let i = 0; i < confettiCount; i++) {
            createConfettiPiece(colors[Math.floor(Math.random() * colors.length)]);
        }
    }
    
    function createConfettiPiece(color) {
        const confetti = $('<div>')
            .css({
                position: 'fixed',
                left: Math.random() * 100 + '%',
                top: '-10px',
                width: '10px',
                height: '10px',
                backgroundColor: color,
                zIndex: 9999,
                pointerEvents: 'none'
            })
            .appendTo($body);
        
        confetti.animate({
            top: $window.height() + 'px',
            left: '+=' + (Math.random() * 200 - 100) + 'px'
        }, {
            duration: 3000 + Math.random() * 2000,
            complete: function() {
                confetti.remove();
            }
        });
    }
    
    // ========================================
    // KEYBOARD SHORTCUTS
    // ========================================
    
    $document.keydown(function(e) {
        // Ctrl + / or Cmd + / - Show shortcuts help
        if ((e.ctrlKey || e.metaKey) && e.which === 191) {
            e.preventDefault();
            showKeyboardShortcuts();
        }
        
        // ESC - Close mobile menu
        if (e.which === 27) {
            $('#mobile-menu').slideUp(300);
            $('#mobile-menu-btn').removeClass('active');
        }
        
        // Space - Pause/resume animations (accessibility)
        if (e.which === 32 && e.target.tagName !== 'INPUT' && e.target.tagName !== 'TEXTAREA') {
            e.preventDefault();
            toggleAnimations();
        }
    });
    
    function showKeyboardShortcuts() {
        const shortcuts = [
            'Ctrl/Cmd + / : Show this help',
            'ESC : Close mobile menu',
            'Space : Toggle animations',
            '↑↓ : Navigate sections',
            'Tab : Navigate interactive elements'
        ];
        
        alert('⌨️ Keyboard Shortcuts:\n\n' + shortcuts.join('\n'));
    }
    
    let animationsPaused = false;
    function toggleAnimations() {
        animationsPaused = !animationsPaused;
        
        if (animationsPaused) {
            $body.addClass('animations-paused');
            console.log('🔇 Animations paused');
        } else {
            $body.removeClass('animations-paused');
            console.log('🔊 Animations resumed');
        }
    }
    
    // ========================================
    // FORM HANDLING (for future contact forms)
    // ========================================
    
    function handleFormSubmit($form) {
        const formData = new FormData($form[0]);
        const submitBtn = $form.find('button[type="submit"]');
        const originalText = submitBtn.text();
        
        // Disable submit button and show loading
        submitBtn.prop('disabled', true).text('Sending...');
        
        // Simulate form submission (replace with actual AJAX call)
        setTimeout(() => {
            alert('Message sent successfully! 📧\n(This is a demo - no actual email was sent)');
            
            // Reset form and button
            $form[0].reset();
            submitBtn.prop('disabled', false).text(originalText);
        }, 2000);
    }
    
    // ========================================
    // THEME SWITCHING (for future implementation)
    // ========================================
    
    function initThemeSwitch() {
        const theme = localStorage.getItem('theme') || 'light';
        $body.addClass('theme-' + theme);
        
        $('#theme-toggle').click(function() {
            const currentTheme = $body.hasClass('theme-dark') ? 'dark' : 'light';
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            $body.removeClass('theme-' + currentTheme).addClass('theme-' + newTheme);
            localStorage.setItem('theme', newTheme);
        });
    }
    
    // ========================================
    // PERFORMANCE MONITORING
    // ========================================
    
    function logPerformance() {
        if (window.performance) {
            const loadTime = window.performance.timing.loadEventEnd - window.performance.timing.navigationStart;
            console.log(`📊 Page load time: ${loadTime}ms`);
            
            const memoryInfo = window.performance.memory;
            if (memoryInfo) {
                console.log(`💾 Memory usage: ${Math.round(memoryInfo.usedJSHeapSize / 1024 / 1024)}MB`);
            }
        }
    }
    
    // ========================================
    // UTILITY FUNCTIONS
    // ========================================
    
    // Debounce function for scroll events
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Throttle function for resize events
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }
    
    // Random color generator
    function getRandomColor() {
        const colors = ['blue', 'purple', 'green', 'red', 'yellow', 'indigo', 'pink'];
        return colors[Math.floor(Math.random() * colors.length)];
    }
    
    // Format numbers with commas
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    
    // ========================================
    // INITIALIZATION
    // ========================================
    
    // Initialize all functionality
    function init() {
        console.log('🎯 Initializing Learning Hub...');
        
        // Check initial scroll position for animations
        checkScrollAnimations();
        
        // Initialize theme switching (if theme toggle exists)
        if ($('#theme-toggle').length) {
            initThemeSwitch();
        }
        
        // Log performance metrics
        setTimeout(logPerformance, 1000);
        
        // Add loading states to buttons
        $('.btn-primary, .btn-secondary').click(function() {
            const $btn = $(this);
            $btn.addClass('animate-pulse');
            setTimeout(() => $btn.removeClass('animate-pulse'), 300);
        });
        
        // Initialize tooltips (if any)
        $('[data-tooltip]').hover(
            function() {
                const tooltip = $(this).data('tooltip');
                const $tooltip = $('<div class="tooltip">' + tooltip + '</div>');
                $tooltip.appendTo($body).fadeIn(200);
                
                const offset = $(this).offset();
                $tooltip.css({
                    position: 'absolute',
                    top: offset.top - $tooltip.outerHeight() - 10,
                    left: offset.left + ($(this).outerWidth() / 2) - ($tooltip.outerWidth() / 2),
                    zIndex: 10000
                });
            },
            function() {
                $('.tooltip').fadeOut(200, function() { $(this).remove(); });
            }
        );
        
        console.log('✅ Learning Hub initialized successfully!');
        console.log('🎨 Try clicking the logo 5 times for a surprise!');
        console.log('⌨️ Press Ctrl+/ for keyboard shortcuts');
    }
    
    // Start initialization
    init();
    
    // ========================================
    // WINDOW RESIZE HANDLING
    // ========================================
    
    $window.resize(throttle(function() {
        // Close mobile menu on resize to desktop
        if ($window.width() >= 768) {
            $('#mobile-menu').hide();
            $('#mobile-menu-btn').removeClass('active');
        }
        
        // Recalculate scroll animations
        checkScrollAnimations();
    }, 250));
    
    // ========================================
    // ERROR HANDLING
    // ========================================
    
    window.onerror = function(msg, url, lineNo, columnNo, error) {
        console.error('🚨 JavaScript Error:', {
            message: msg,
            source: url,
            line: lineNo,
            column: columnNo,
            error: error
        });
        return false;
    };
    
    // ========================================
    // FINAL SETUP
    // ========================================
    
    // Add CSS class to indicate JavaScript is loaded
    $body.addClass('js-loaded');
    
    // Add smooth scrolling class for browsers that support it
    if (CSS.supports('scroll-behavior', 'smooth')) {
        $('html').addClass('smooth-scroll');
    }
    
    // Console welcome message
    console.log('%c🚀 Welcome to Learning Hub!', 'color: #3B82F6; font-size: 16px; font-weight: bold;');
    console.log('%cBuilt with PHP, HTML, Tailwind CSS, and jQuery', 'color: #6366F1; font-size: 12px;');
    console.log('%cOpen to learning opportunities! 📚', 'color: #10B981; font-size: 12px;');
    
});
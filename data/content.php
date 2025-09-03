<?php

/**
 * Website content data
 * Contains all dynamic content for the website
 */

// Skills data
$skills = [
    [
        'name' => 'Weather Widget',
        'description' => 'Real-time weather information with API integration',
        'tech' => 'PHP + API',
        'status' => 'In Progress',
        'icon' => 'fas fa-cloud-sun',
        'github' => '#',
        'demo' => '#',
        'features' => ['API Integration', 'Geolocation', 'Dynamic Updates']
    ],
    [
        'name' => 'Blog System',
        'description' => 'Content management system for blog posts and articles',
        'tech' => 'PHP + MySQL',
        'status' => 'Planning',
        'icon' => 'fas fa-blog',
        'github' => '#',
        'demo' => '#',
        'features' => ['CRUD Operations', 'User Authentication', 'Comment System']
    ],
    [
        'name' => 'Image Gallery',
        'description' => 'Responsive image gallery with lightbox functionality',
        'tech' => 'jQuery + CSS3',
        'status' => 'Completed',
        'icon' => 'fas fa-images',
        'github' => '#',
        'demo' => '#',
        'features' => ['Lightbox Effect', 'Image Filtering', 'Lazy Loading']
    ],
    [
        'name' => 'Contact Form',
        'description' => 'Secure contact form with validation and email functionality',
        'tech' => 'PHP + JavaScript',
        'status' => 'In Progress',
        'icon' => 'fas fa-envelope',
        'github' => '#',
        'demo' => '#',
        'features' => ['Form Validation', 'Email Sending', 'Spam Protection']
    ]
];

// Testimonials data
$testimonials = [
    [
        'name' => 'Sarah Johnson',
        'role' => 'Web Developer',
        'company' => 'Tech Solutions Inc.',
        'message' => 'Great attention to detail and modern design principles. The code quality is excellent!',
        'avatar' => '👩‍💻',
        'rating' => 5
    ],
    [
        'name' => 'Mike Chen',
        'role' => 'Project Manager',
        'company' => 'Digital Agency',
        'message' => 'Impressive learning progress and dedication. The projects show real understanding of web technologies.',
        'avatar' => '👨‍💼',
        'rating' => 5
    ],
    [
        'name' => 'Emily Davis',
        'role' => 'UI/UX Designer',
        'company' => 'Creative Studio',
        'message' => 'Beautiful implementation of designs with smooth interactions. Really enjoyable user experience!',
        'avatar' => '👩‍🎨',
        'rating' => 4
    ]
];

// Blog posts data
$blog_posts = [
    [
        'title' => 'Getting Started with PHP',
        'excerpt' => 'A beginner-friendly guide to PHP basics and server-side scripting.',
        'date' => '2024-03-15',
        'category' => 'PHP',
        'read_time' => 5,
        'featured' => true,
        'tags' => ['PHP', 'Backend', 'Beginner']
    ],
    [
        'title' => 'Tailwind CSS vs Bootstrap',
        'excerpt' => 'Comparing utility-first CSS framework with traditional component-based approach.',
        'date' => '2024-03-10',
        'category' => 'CSS',
        'read_time' => 8,
        'featured' => false,
        'tags' => ['CSS', 'Tailwind', 'Bootstrap']
    ],
    [
        'title' => 'jQuery in Modern Web Development',
        'excerpt' => 'Is jQuery still relevant in 2024? Exploring its role in today\'s web landscape.',
        'date' => '2024-03-05',
        'category' => 'JavaScript',
        'read_time' => 6,
        'featured' => true,
        'tags' => ['jQuery', 'JavaScript', 'Frontend']
    ]
];

// Learning resources
$learning_resources = [
    [
        'title' => 'MDN Web Docs',
        'description' => 'Comprehensive web development documentation',
        'url' => 'https://developer.mozilla.org/',
        'category' => 'Documentation',
        'icon' => 'fas fa-book'
    ],
    [
        'title' => 'PHP.net',
        'description' => 'Official PHP documentation and tutorials',
        'url' => 'https://www.php.net/',
        'category' => 'PHP',
        'icon' => 'fab fa-php'
    ],
    [
        'title' => 'Tailwind CSS Docs',
        'description' => 'Utility-first CSS framework documentation',
        'url' => 'https://tailwindcss.com/',
        'category' => 'CSS',
        'icon' => 'fas fa-paint-brush'
    ],
    [
        'title' => 'jQuery API',
        'description' => 'Complete jQuery library reference',
        'url' => 'https://api.jquery.com/',
        'category' => 'JavaScript',
        'icon' => 'fab fa-js'
    ]
];

// Achievement data
$achievements = [
    [
        'title' => 'First Website Deployed',
        'description' => 'Successfully deployed first website using PHP and HTML',
        'date' => '2024-01-15',
        'icon' => 'fas fa-rocket',
        'badge_color' => 'bg-green-500'
    ],
    [
        'title' => 'Responsive Design Master',
        'description' => 'Created mobile-first responsive layouts with Tailwind CSS',
        'date' => '2024-02-10',
        'icon' => 'fas fa-mobile-alt',
        'badge_color' => 'bg-blue-500'
    ],
    [
        'title' => 'Interactive UI Builder',
        'description' => 'Implemented dynamic user interactions with jQuery',
        'date' => '2024-02-28',
        'icon' => 'fas fa-bolt',
        'badge_color' => 'bg-purple-500'
    ],
    [
        'title' => 'Database Integration',
        'description' => 'Connected PHP backend with MySQL database',
        'date' => '2024-03-12',
        'icon' => 'fas fa-database',
        'badge_color' => 'bg-orange-500'
    ]
];

// FAQ data
$faqs = [
    [
        'question' => 'What technologies do you work with?',
        'answer' => 'I primarily work with PHP for server-side development, HTML5 for structure, Tailwind CSS for styling, and jQuery for interactive frontend features. I\'m also learning MySQL for database management.'
    ],
    [
        'question' => 'How long have you been learning web development?',
        'answer' => 'I started my web development journey in early 2024. While I\'m still learning, I\'ve made significant progress in understanding modern web technologies and best practices.'
    ],
    [
        'question' => 'Do you work on freelance projects?',
        'answer' => 'Currently, I\'m focusing on building my skills and portfolio. As I gain more experience, I plan to take on freelance projects to apply my knowledge in real-world scenarios.'
    ],
    [
        'question' => 'What\'s your preferred development environment?',
        'answer' => 'I use VS Code as my primary editor with XAMPP for local PHP development. I also utilize Git for version control and various browser dev tools for debugging and testing.'
    ]
];

// Contact form fields
$contact_fields = [
    [
        'name' => 'full_name',
        'type' => 'text',
        'label' => 'Full Name',
        'required' => true,
        'placeholder' => 'Enter your full name'
    ],
    [
        'name' => 'email',
        'type' => 'email',
        'label' => 'Email Address',
        'required' => true,
        'placeholder' => 'your.email@example.com'
    ],
    [
        'name' => 'subject',
        'type' => 'text',
        'label' => 'Subject',
        'required' => true,
        'placeholder' => 'What is this about?'
    ],
    [
        'name' => 'message',
        'type' => 'textarea',
        'label' => 'Message',
        'required' => true,
        'placeholder' => 'Tell me more about your project or question...',
        'rows' => 5
    ]
];

// Projects data
$projects = [
    [
        'name' => 'Personal Portfolio',
        'description' => 'A responsive portfolio website showcasing my learning journey',
        'tech' => 'PHP + Tailwind CSS',
        'status' => 'Completed',
        'icon' => 'fas fa-paint-brush',
        'github' => '#',
        'demo' => '#',
        'features' => ['Responsive Design', 'Interactive Elements', 'Modern UI']
    ],
    [
        'name' => 'Todo List App',
        'description' => 'Interactive task management application with local storage',
        'tech' => 'JavaScript + jQuery',
        'status' => 'Completed',
        'icon' => 'fas fa-tasks',
        'github' => '#',
        'demo' => '#',
        'features' => ['Add/Delete Tasks', 'Mark Complete', 'Local Storage']
    ],
    [
        'name' => 'Weather App',
        'description' => 'Current weather forecast and geolocation services',
        'tech' => 'PHP + OpenWeatherMap API',
        'status' => 'Completed',
        'icon' => 'fas fa-cloud-sun',
        'github' => '#',
        'demo' => '#',
        'features' => ['Current Weather', 'Forecast', 'Geolocation']
    ]
];

// Site statistics (simulated data)
$site_stats = [
    'total_projects' => count($projects),
    'skills_learned' => count($skills),
    'code_commits' => rand(150, 300),
    'learning_hours' => rand(200, 500),
    'blog_posts' => count($blog_posts),
    'achievements' => count($achievements)
];

// Skills data
$skills = [
    [
        'name' => 'HTML5',
        'description' => 'Semantic markup and modern HTML features',
        'level' => 90,
        'icon' => 'fab fa-html5',
        'color' => 'orange'
    ],
    [
        'name' => 'CSS3 & Tailwind',
        'description' => 'Modern styling with utility-first approach',
        'level' => 85,
        'icon' => 'fab fa-css3-alt',
        'color' => 'blue'
    ],
    [
        'name' => 'JavaScript',
        'description' => 'Interactive web functionality and DOM manipulation',
        'level' => 80,
        'icon' => 'fab fa-js-square',
        'color' => 'yellow'
    ],
    [
        'name' => 'PHP',
        'description' => 'Server-side scripting and dynamic content',
        'level' => 75,
        'icon' => 'fab fa-php',
        'color' => 'purple'
    ],
    [
        'name' => 'jQuery',
        'description' => 'Simplified JavaScript library for enhanced UX',
        'level' => 82,
        'icon' => 'fas fa-code',
        'color' => 'blue'
    ],
    [
        'name' => 'Responsive Design',
        'description' => 'Mobile-first and cross-device compatibility',
        'level' => 88,
        'icon' => 'fas fa-mobile-alt',
        'color' => 'green'
    ]
];

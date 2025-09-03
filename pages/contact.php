<?php
require_once '../config/config.php';
require_once '../includes/functions.php';
require_once '../data/content.php';

$current_page = 'contact';
$page_title = 'Contact Me - ' . SITE_NAME;

// Initialize variables for form handling
$form_submitted = false;
$form_success = false;
$form_error = '';
$form_data = [];

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_submitted = true;

    // Sanitize and validate form inputs
    $form_data['full_name'] = sanitizeInput($_POST['full_name'] ?? '');
    $form_data['email'] = sanitizeInput($_POST['email'] ?? '');
    $form_data['subject'] = sanitizeInput($_POST['subject'] ?? '');
    $form_data['message'] = sanitizeInput($_POST['message'] ?? '');

    // Basic validation
    if (empty($form_data['full_name']) || empty($form_data['email']) || empty($form_data['subject']) || empty($form_data['message'])) {
        $form_error = 'Please fill in all required fields.';
    } elseif (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Please enter a valid email address.';
    } else {
        // In a real application, you would send an email here
        // For this demo, we'll simulate a successful submission
        $form_success = true;
    }
}
?>

<?php include '../includes/header.php'; ?>

<!-- Contact Hero Section -->
<section class="py-20 px-4 bg-gradient-to-br from-blue-50 to-indigo-100">
    <div class="max-w-4xl mx-auto text-center">
        <div class="animate-fade-in-up">
            <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mx-auto mb-8 flex items-center justify-center text-6xl text-white">
                <i class="fas fa-envelope"></i>
            </div>
            <h1 class="text-5xl font-bold text-gray-800 mb-6">Get In Touch</h1>
            <p class="text-xl text-gray-600 mb-8">
                Have a question or want to work together? Send me a message!
            </p>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-20 px-4 bg-white animate-fade-in-up">
    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Contact Information</h2>
                <div class="space-y-6">
                    <?php foreach ($social_links as $platform => $link): ?>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white text-xl mr-4">
                                <i class="<?php echo $link['icon']; ?>"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800"><?php echo $link['label']; ?></h3>
                                <a href="<?php echo $link['url']; ?>" class="text-blue-600 hover:text-blue-800 transition-colors duration-300" target="_blank" rel="noopener">
                                    <?php echo $platform === 'email' ? CONTACT_EMAIL : 'View Profile'; ?>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Office Hours</h3>
                    <p class="text-gray-600 mb-2">
                        <i class="far fa-clock mr-2"></i> Monday - Friday: 9:00 AM - 5:00 PM
                    </p>
                    <p class="text-gray-600">
                        <i class="fas fa-map-marker-alt mr-2"></i> Rajshahi, Bangladesh
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <?php if ($form_submitted && $form_success): ?>
                    <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6 shadow-sm animate-fade-in">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-3"></i>
                            <div>
                                <h3 class="font-semibold text-lg">Message Sent Successfully!</h3>
                                <p>Thank you for reaching out. I'll get back to you as soon as possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-6">
                        <a href="contact.php" class="btn-primary inline-flex items-center">
                            <i class="fas fa-paper-plane mr-2"></i> Send Another Message
                        </a>
                    </div>
                <?php else: ?>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Send a Message</h2>

                    <?php if ($form_submitted && !empty($form_error)): ?>
                        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6 shadow-sm animate-fade-in">
                            <div class="flex items-center">
                                <i class="fas fa-exclamation-circle text-2xl mr-3"></i>
                                <div>
                                    <h3 class="font-semibold text-lg">Form Submission Error</h3>
                                    <p><?php echo $form_error; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="contact-form" class="space-y-6">
                        <?php foreach ($contact_fields as $field): ?>
                            <div class="form-group">
                                <label for="<?php echo $field['name']; ?>" class="block text-gray-700 font-medium mb-2">
                                    <?php echo $field['label']; ?>
                                    <?php if ($field['required']): ?>
                                        <span class="text-red-500">*</span>
                                    <?php endif; ?>
                                </label>

                                <?php if ($field['type'] === 'textarea'): ?>
                                    <textarea
                                        id="<?php echo $field['name']; ?>"
                                        name="<?php echo $field['name']; ?>"
                                        placeholder="<?php echo $field['placeholder']; ?>"
                                        rows="<?php echo $field['rows'] ?? 5; ?>"
                                        class="form-input w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300 shadow-sm hover:shadow-md"
                                        <?php echo $field['required'] ? 'required' : ''; ?>><?php echo $form_data[$field['name']] ?? ''; ?></textarea>
                                <?php else: ?>
                                    <input
                                        type="<?php echo $field['type']; ?>"
                                        id="<?php echo $field['name']; ?>"
                                        name="<?php echo $field['name']; ?>"
                                        placeholder="<?php echo $field['placeholder']; ?>"
                                        class="form-input w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300 shadow-sm hover:shadow-md"
                                        value="<?php echo $form_data[$field['name']] ?? ''; ?>"
                                        <?php echo $field['required'] ? 'required' : ''; ?>>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>

                        <div class="form-group">
                            <button type="submit" class="btn-primary w-full inline-flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2"></i> Send Message
                            </button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 px-4 bg-gray-50 animate-fade-in-up">
    <div class="max-w-4xl mx-auto">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <?php foreach (array_slice($faqs, 0, 3) as $index => $faq): ?>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">
                        <i class="fas fa-question-circle text-blue-500 mr-2"></i>
                        <?php echo $faq['question']; ?>
                    </h3>
                    <p class="text-gray-600"><?php echo $faq['answer']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
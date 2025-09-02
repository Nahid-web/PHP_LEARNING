<?php
// contact.php
include '../components/header.php';
renderHeader("Contact - PHP Learning Hub");
?>

<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8">Contact Us</h1>

        <div class="bg-white rounded-lg shadow-lg p-8 max-w-2xl mx-auto">
            <form id="contactForm">
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input type="text" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                        Message
                    </label>
                    <textarea id="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">
                        Send Message
                    </button>
                </div>
            </form>

            <div id="formResponse" class="mt-6 p-4 bg-green-100 text-green-700 rounded hidden">
                Thank you for your message! We'll get back to you soon.
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault();
            $('#formResponse').removeClass('hidden').fadeIn();
        });
    });
</script>

<?php
include '../components/footer.php';
renderFooter();
?>
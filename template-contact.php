<?php
/*
Template Name: Contacts
*/

// Check if the form is submitted
$form_submitted = isset($_POST['submit']);

// Process the form data
if ($form_submitted) {
    // Get form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Process the form data (e.g., send email, save to database, etc.)
    // You can customize this part based on your requirements

    // Example: Send an email
    $to = 'info@wordpress.com';
    $subject = 'New Contact Form Submission';
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";
    $headers = "From: $name <$email>";
    wp_mail($to, $subject, $message, $headers);

    // Set a success message
    $is_success = true;
}

get_header();
?>

<section>
        <div class="contact">
            <div class="container">
                <?php if ($form_submitted && $is_success) : ?>
                    <p>Thank you for your message. We will get back to you soon.</p>
                <?php else : ?>
                    <div class="form-container">
                        <form action="" method="post">
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div>
                                <label for="phone">Phone Number:</label>
                                <input type="tel" id="phone" name="phone" required>
                            </div>
                            <div>
                                <label for="subject">Subject:</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                            <div>
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" required></textarea>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                <?php endif; ?>

                <div id="map-container">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11183.267469497445!2d23.90358763840046!3d54.89814423710997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e8ef1b090fef19%3A0x48a5b804c0a221b1!2sKaunas%2C%20Lithuania!5e0!3m2!1sen!2s!4v1623456789012!5m2!1sen!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php get_footer(); ?>

<?php
include '../header.php';
?>
<head>
    <link rel="stylesheet" href="/calculators/calcu.css">
    <link rel="stylesheet" href="/footer-style.css">
    <link rel="stylesheet" href="/styles.css"> <!-- Link to your stylesheet -->
</head>
<main>
    <section class="contact">
        <div class="contact-container">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you! Whether you have questions, feedback, or need support, feel free to reach out to us using the contact information below:</p>
            <ul>
                <li><strong>Email:</strong> support@calculator.moneyphobia.in</li>
                <li><strong>Phone:</strong> +91-123-456-7890</li>
                <li><strong>Address:</strong> 123 Financial Street, Mumbai, India</li>
            </ul>
            <h2>Contact Form</h2>
            <form id="contact-form" action="contact-form-handler.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
</main>

<?php
include '../footer.php';
?>

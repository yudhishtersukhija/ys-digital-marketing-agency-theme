<?php
/**
 * Footer Template
 *
 * @package YS_Digital_Marketing_Agency
 */

$contact_email = get_theme_mod(
    'ys_contact_email',
    ''
);

$contact_phone = get_theme_mod(
    'ys_contact_phone',
    ''
);

$footer_text = get_theme_mod(
    'ys_footer_text',
    '© YS Digital Marketing Agency'
);
?>

<footer class="site-footer">

    <div class="container">

        <?php
        if (is_active_sidebar('footer-widgets')) {
            dynamic_sidebar('footer-widgets');
        }
        ?>

        <div class="footer-grid">

            <div class="footer-column">

                <h4>Contact Email</h4>

                        <?php if (!empty($contact_email)): ?>

                    <a href="mailto:<?php echo esc_attr($contact_email); ?>">

                                <?php echo esc_html($contact_email); ?>

                    </a>

                        <?php endif; ?>

            </div>

            <div class="footer-column">

                <h4>Phone</h4>

                        <?php if (!empty($contact_phone)): ?>

                    <p>

                                <?php echo esc_html($contact_phone); ?>

                    </p>

                        <?php endif; ?>

            </div>

            <div class="footer-column">

                <h4>Copyright</h4>

                <p>

                            <?php echo esc_html($footer_text); ?>

                </p>

            </div>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
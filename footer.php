<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package digitalchoice
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'digitalchoice' ) ); ?>">
            <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'digitalchoice' ), 'WordPress' );
				?>
        </a>
        <span class="sep"> | </span>
        <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'digitalchoice' ), 'digitalchoice', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>

    </div><!-- .site-info -->
    t>
</footer><!-- #colophon -->
</div><!-- #page -->
<script href="<?php echo get_template_directory_uri() . '/assets/js/main.js'; ?>"></script>

<?php wp_footer(); ?>

</body>

</html>
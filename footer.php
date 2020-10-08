<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_starter_kit
 */

?>

	</div><!-- #content -->

    <div class="footer clearfix">
        <div class="wrapper clearfix">
          <ul>
            <li><img src="<?php echo(get_template_directory_uri()); ?>/images/logo_white.png" alt="logo"></li>
          </ul>
          <ul>
            <li>Head Office:</li>
            <li><span class="caret"></span> Khwaza Tower</li>
            <li>9th Floor, 95 Mohakhali C/A</li>
            <li><span class="caret"></span> 09613234112</li>
          </ul>
          <ul>
            <li>Internet Services</li>
            <li>WAN Services</li>
            <li>Global Services</li>
            <li>Colocation Services</li>
          </ul>
          <ul>
            <li>For Your Home</li>
            <li>Contact Us</li>
          </ul>
          <ul>
            <li>HOTLINE:</li>
            <li>09613234112</li>
          </ul>
          <div class="copyright">
            <p>&copy; 2019 Race Online</p>
          </div>
        </div>
    </div>

</div><!-- #page -->

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>

<?php wp_footer(); ?>
</body>
</html>

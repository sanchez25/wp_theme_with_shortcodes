<?php if (is_amp()):

    $amp_class = 'content_amp';

endif; ?>

<?php
    $offer_link = get_field('offer_link', 'option');
?>
<footer>
    <div class="footer wrapper <?php echo $amp_class; ?>">
        <div class="footer__content">
            <div class="footer__content-bga">
                <?php
                    $custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                    if ($custom_logo) {
                        echo '<img src="' . esc_url($custom_logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                    } else { ?>
                        <a href="/" class="logo-text"><?php echo bloginfo('name') ?></a>
                <?php } ?>
            </div>
            <div class="footer__content-copyright">
                <img src="<?php echo get_template_directory_uri() ?>/img/footer/visa-logo.webp" alt="gamble aware">
                <img src="<?php echo get_template_directory_uri() ?>/img/footer/mastercard-logo.webp" alt="gamcare">
                <img src="<?php echo get_template_directory_uri() ?>/img/footer/farmacias-logo.webp" alt="mga">
                <img src="<?php echo get_template_directory_uri() ?>/img/footer/ponlimas-logo.webp" alt="mga">
                <img src="<?php echo get_template_directory_uri() ?>/img/footer/activa-logo.webp" alt="mga">
                <img src="<?php echo get_template_directory_uri() ?>/img/footer/ya-logo.webp" alt="mga">
                <img src="<?php echo get_template_directory_uri() ?>/img/footer/medicity-logo.webp" alt="mga">
                <img src="<?php echo get_template_directory_uri() ?>/img/footer/payphone-logo.webp" alt="mga">
            </div>
        </div>
    </div>
    <?php if (is_amp()):?>
        <div class="scroll-top <?php echo $amp_class; ?>" on="tap:scroll.scrollTo(duration=200)">
            <div class="scroll-top-bg">    
                <img src="<?php echo get_template_directory_uri() ?>/img/up-icon.svg" alt="scroll">
            </div>
        </div>
    <?php else: ?>
        <div class="scroll-top">
            <div class="scroll-top-bg"> 
                <img src="<?php echo get_template_directory_uri() ?>/img/up-icon.svg" alt="scroll">
            </div>
        </div>
    <?php endif; ?>
</footer>
<div class="fixed_buttons">
    <?php if (is_amp()): ?>
        <button class="btn reg" on="tap:AMP.navigateTo(url='<?php echo $offer_link; ?>')" >
    <?php else: ?>
        <button class="btn reg" onclick="location.href='<?php echo $offer_link; ?>'">
    <?php endif; ?>
        <span>Registro</span>    
    </button>
    <?php if (is_amp()): ?>
        <button class="btn log" on="tap:AMP.navigateTo(url='<?php echo $offer_link; ?>')" >
    <?php else: ?>
        <button class="btn log" onclick="location.href='<?php echo $offer_link; ?>'">
    <?php endif; ?>
        <span>Entrar</span>
    </button>
</div>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

</body>
</html>

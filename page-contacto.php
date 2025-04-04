<?php
/*
Nombre página: Contacto
*/
 get_header(); ?>

<main class="contact-page">
    <?php
    // Mostrar el formulario de Contact Form 7
    if(shortcode_exists('contact-form-7')) {
        echo do_shortcode('[contact-form-7 id="ffa4cdb" title="Contact form 1"]');
    }
    ?>
</main>

<?php get_footer(); ?>
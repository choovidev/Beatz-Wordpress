<!--
Nombre página: Index
-->
<!-- header -->
<?php get_header(); ?>
<!-- main -->
<main>
  <!-- contenido -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <!-- titulo -->
      <h3><?php the_title(); ?></h3>
      <!-- contenido -->
      <?php the_content(); ?>
    </article>
  <?php endwhile; ?>
  <?php endif; ?>
</main>
<!-- footer -->
<?php get_footer(); ?>
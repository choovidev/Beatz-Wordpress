<!-- header -->
<?php get_header(); ?>

<!-- sidebar utilizado para boton de busqueda-->
<div class="sidebar">
  <?php if ( is_active_sidebar( 'sidebar-primario' ) ) : ?>
    <aside class="sidebar">
      <?php dynamic_sidebar( 'sidebar-primario' ); ?>
    </aside>
  <?php endif; ?>
</div>

<!-- contenedor de posts -->
<div class="blog-container">
  <div class="posts-section">
    <!-- Obtener entradas de blog -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post-article">
        <!-- titulo del post -->
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <!-- descripcion del post -->
        <p><?php the_excerpt(); ?></p>
        <!-- boton de leer mas -->
        <a href="<?php the_permalink(); ?>" class="read-more">Leer más</a>
      </article>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>


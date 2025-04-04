<!-- Front Page -->
<?php get_header(); ?>
<main>
  <!-- Sección de la galería -->
  <div class="gallery-container">
    <!-- Título de la sección -->
    <h4>Para ti</h4>
    <!-- Sección de la galería -->
    <div class="gallery-section">
      <!-- Botón de flecha izquierda -->
      <button class="arrow left">&lt;</button>
      <!-- Columna de imágenes -->
      <div class="column">
        <!-- Imágenes -->
        <?php for ($i = 1; $i <= 5; $i++) : ?>
          <!-- Contenedor de la imagen -->
          <div class="image">
            <!-- Imagen -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $i; ?>.jpg" alt="Album Cover" />
          </div>
        <?php endfor; ?>
      </div>
      <!-- Botón de flecha derecha -->
      <button class="arrow right">&gt;</button>
    </div>
    <!-- Título de la sección -->
    <h4>Explorar</h4>
    <!-- Sección de la galería -->
    <div class="gallery-section">
      <!-- Botón de flecha izquierda -->
      <button class="arrow left">&lt;</button>
      <!-- Columna de imágenes -->
      <div class="column">
        <!-- Imágenes -->
        <?php for ($i = 6; $i <= 10; $i++) : ?>
          <!-- Contenedor de la imagen -->
          <div class="image">
            <!-- Imagen -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $i; ?>.jpg" alt="Album Cover" />
          </div>
        <?php endfor; ?>
      </div>
      <!-- Botón de flecha derecha -->
      <button class="arrow right">&gt;</button>
    </div>
  </div>
</main>
<!-- Footer -->
<?php get_footer(); ?>

<?php $template_uri = get_template_directory_uri(); ?>

<?php get_template_part('sections/assets/tope_porque.svg') ?>

<div class="seccion" id="por-que">
  <div class="texto-container medio">
  <?php $titulo_porque = get_option( 'titulo_por_que_seccion_inicio', '¿Por qué somos tu opción?' ); ?>
    <h1><?php echo esc_html( wp_kses( $titulo_porque , array() ) ) ?></h1>
  <?php
    $texto_porque = get_option( 'texto_por_que_seccion_inicio' );
    if ( $texto_porque ) :
      echo wp_kses_post( strip_tags( $texto_porque , '<p>' ) );
    else :
  ?>
    <p>
      Desarrollamos e implementamos soluciones integrales
      involucrando al talento interno del cliente, ajustadas
      a sus necesidades y oportunidades; soportando su estrategia
      comercial y logrando un crecimiento sustentable.
    </p>
    <p class="mobile-hide">
      Los resultados obtenidos en las implementaciones
      realizadas, han propiciado relaciones comerciales de
      largo plazo con nuestros clientes.
    </p>
    <p class="mobile-hide">
      Nos hemos distinguido por lograr cambios culturales
      en las organizaciones acompañados de plan
      comunicacional interno y una metodología para el
      manejo del cambio.
    </p>
    <p class="no-padding">
      Formamos y certificamos facilitadores internos en
      metodología de gestión empoderando a los líderes
      participantes en el modelaje de sus colaboradores.
    </p>
    <p>
      Auditamos y retroalimentamos el cumplimiento de
      metodología de gestión, procesos comerciales y ejecución
      del punto de venta, acompañadas del diseño
      y ejecución de planes de acción para el cierre de
      brechas.
    </p>
  <?php endif; ?>
  </div>

  <?php get_template_part('sections/assets/mapa.svg') ?>

  <div class="relleno-float"></div>

  <?php get_template_part('sections/assets/linea_naranja.svg') ?>

  <div class="categorias">
    <?php
      $titulo_categorias = false;
      if ( $titulo_categorias ) :
    ?>
      <h1><?php // Sacar titulo db ?></h1>
    <?php else : ?>
      <h1>EXPERIENCIA EN MÚLTIPLES CATEGORÍAS NIELSEN</h1>
    <?php endif; ?>
    <div class="contenedor-categorias">
      <?php
        $loop = new WP_Query( array(
          'post_type' => 'categorias-inicio'
        ) );
        if ( $loop->have_posts() ) :
          while( $loop->have_posts() ) : $loop->the_post() ?>
            <div class="categoria">
              <div class="imagen">
                <?php the_post_thumbnail() ?>
              </div>
              <div class="texto">
                <h2><?php the_title() ?>
                  <div class="flecha"></div>
                </h2>
                <p>
                  <?php the_content() ?>
                </p>
              </div>
            </div>
      <?php
          endwhile;
        else :
      ?>
        <div class="categoria">
          <div class="imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/food.svg" alt="food" />
          </div>
          <div class="texto">
            <h2>FOOD
              <div class="flecha"></div>
            </h2>
            <p>Pastas, harinas, galletas, cereales, etc.</p>
          </div>
        </div>
        <div class="categoria">
          <div class="imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/beverages.svg" alt="beverages" />
          </div>
          <div class="texto">
            <h2>BEVERAGES
              <div class="flecha"></div>
            </h2>
            <p>Jugos, whisky, ron, bebidas energizantes.</p>
          </div>
        </div>
        <div class="categoria">
          <div class="imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/home.svg" alt="home cleaning" />
          </div>
          <div class="texto">
            <h2>HOME CLEANING
              <div class="flecha"></div>
            </h2>
            <p>Insecticidas, desinfectantes, toilet, kitchen, detergentes, suavizantes, air care, auto care, etc.</p>
          </div>
        </div>
        <div class="categoria">
          <div class="imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/personal.svg" alt="personal care" />
          </div>
          <div class="texto">
            <h2>PERSONAL CARE
              <div class="flecha"></div>
            </h2>
            <p>Shampoo, protección, sanitaria, baby care, etc.</p>
          </div>
        </div>
        <div class="categoria">
          <div class="imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/other.svg" alt="other categories" />
          </div>
          <div class="texto">
            <h2>OTHER CATEGORIES
              <div class="flecha"></div>
            </h2>
            <p>Lubricantes de automóviles, distribución de prensa escrita a retailers.</p>
          </div>
        </div>
      <?php endif; wp_reset_postdata() ?>
    </div>
  </div>
</div><!-- final #por-que -->
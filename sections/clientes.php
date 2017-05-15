<?php $template_uri = get_template_directory_uri(); ?>

<div class="seccion" id="clientes-y-aliados">
  <style>
    #clientes-y-aliados
    {
      background: url('<?php echo get_template_directory_uri(); ?>/imagenes/fondo_clientes.png');
      background-size: cover;
      background-position: center;
    }
  </style>
  <div class="blur">
    <?php
      $texto_clientes = false;

      if ( $texto_clientes ) :
        // Sacar info base de datos
      else :
    ?>
      <h1>Conoce los aliados que nos han potenciado a ser quienes somos y a los clientes que hemos ayudado a cumplir sus metas</h1>
    <?php endif; ?>
    <?php
      $video = false;
      if ( $video ) :
    ?>
      <div class="video">
        <!-- embedded video -->
      </div>
    <?php endif; ?>
    <div class="clientes-y-aliados">
      <!-- TODO implementar loop segun categorias si es necesario -->
      <?php
        $hay_categorias = false;
        if ( $hay_categorias ) :
          // Sacar loop de categorías
        else :
      ?>
        <div>
          <h2>
            REGIONALES - NACIONALES
            <?php if ( $video ) : ?>
              <div class="flecha"></div>
            <?php endif; ?>
          </h2>
          <div class="marcas">
            <?php
              $loop = new WP_Query( array(
                'post_type' => 'aliados-jace',
                'category_name' => 'Regionales - Nacionales'
              ) );
              if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post();
                  the_post_thumbnail();
                endwhile;
                wp_reset_postdata();
              else:
            ?>
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/molinos_modernos.svg" alt="molinos modernos" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/demasa.svg" alt="demasa" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/monaca.svg" alt="monaca" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/mavesa.svg" alt="mavesa" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/alfonso_rivas.svg" alt="alfonso rivas" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/frutika.svg" alt="frutika" />
            <?php endif; ?>
            <div style="width:100%;clear: both;"></div>
          </div>
        </div>
        <div>
          <h2>
            TRANSNACIONALES
            <?php if ( $video ) : ?>
              <div class="flecha"></div>
            <?php endif; ?>
          </h2>
          <div class="marcas">
            <?php
              $loop = new WP_Query( array(
                'post_type' => 'aliados-jace',
                'category_name' => 'Transnacionales'
              ) );
              if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post();
                  the_post_thumbnail();
                endwhile;
                wp_reset_postdata();
              else:
            ?>
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/johnson.svg" alt="johnson" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/diageo.svg" alt="diageo" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/colgate_palmolive.svg" alt="colgate palmolive" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/bp.svg" alt="bp" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/johnson_and_johnson.svg" alt="johnson" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/heinz.svg" alt="heinz" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/concha_y_toro.svg" alt="concha y toro" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/kellogs.svg" alt="kellogs" />
            <?php endif; ?>
            <div style="width:100%;clear: both;"></div>
          </div>
        </div>
        <div>
          <h2>
            DISTRIBUIDORAS
            <?php if ( $video ) : ?>
              <div class="flecha"></div>
            <?php endif; ?>
          </h2>
          <div class="marcas">
            <?php
              $loop = new WP_Query( array(
                'post_type' => 'aliados-jace',
                'category_name' => 'Distribuidoras'
              ) );
              if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post();
                  the_post_thumbnail();
                endwhile;
                wp_reset_postdata();
              else:
            ?>
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/altipal.svg" alt="altipal" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/euro_group.svg" alt="euro group" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/cocensa.svg" alt="cocensa" />
              <img src="<?php echo $template_uri; ?>/imagenes/clientes_y_aliados/diroca.svg" alt="diroca" />
            <?php endif; ?>
            <div style="width:100%;clear: both;"></div>
          </div>
        </div>
        <div style="width:100%;clear:both;"></div>
      <?php endif; ?>
    </div><!-- final .clientes-y-aliados -->
    <div id="footer-clientes">

    </div>
  </div><!-- final .blur -->
</div><!-- final #clientes-y-aliados -->
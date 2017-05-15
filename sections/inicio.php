<?php $template_uri = get_template_directory_uri(); ?>

<div class="seccion" id="inicio">
  <div class="blur">
    <style>
      #inicio
      {
        background: url('<?php echo $template_uri; ?>/imagenes/fondo_inicio.png');
        background-size:cover;
      }
    </style>

    <div id="panel-negro-tope-izquierdo"></div><!-- decorativo -->

    <div class="titulo-seccion">
      <?php
        $titulo_seccion_inicio = get_option( 'titulo_seccion_inicio', 
          'ASESORÍA, CONSULTORÍA, ENTRENAMIENTO Y AUDITORÍA INTEGRAL EN PROCESOS COMERCIALES' );
        echo esc_html( wp_kses_post( $titulo_seccion_inicio ) );
      ?>
    </div>

    <div class="subtitulo-seccion">
      <?php
        $subtitulo_seccion_inicio = get_option( 'subtitulo_seccion_inicio',
          'Desde 1998 brindamos asesoría a empresas trasnacionales y nacionales,
          fabricantes y distribuidores de diversas categorías de productos
          de consumo masivo en varios países de latinoamérica' );
        echo esc_html( wp_kses_post( $subtitulo_seccion_inicio ) );
      ?>
    </div>

    <div class="texto">
      <?php
        $texto = get_option('texto_seccion_inicio');
        $texto = wp_kses_post( $texto );
        if ( $texto ) :
          $texto = strip_tags($texto, '<p>');
          echo $texto;
        else :
      ?>
        <p class="mobile-hide">
          Somos una empresa dedicada a la asesoría, consultoría,
          entrenamiento y auditoría integral en procesos
          comerciales y de soporte a ventas, especializada en
          áreas como Ventas, distribución, trade marketing y
          recursos humanos.
        </p>
        <p class="mobile-hide">
          Desde 1998 brindamos asesoría a empresas trasnacionales
          y nacionales, fabricantes y distribuidores de
          diversas categorías de productos de consumo
          masivo en varios Latinoamérica.
        </p>
        <p>
          Contamos con oficinas en Guatemala, Argentina y
          Venezuela, lo que nos permite atender eficientemente
          todos los países de la región.
        </p>
        <p>
          Tenemos experiencia de Negocios en 12 países
          dentro de Latinoamérica, lo que nos permite tener
          un sólido conocimiento multimercado (México,
          Guatemala, Dominicana, Puerto Rico, Panamá,
          Colombia, Venezuela, Ecuador, Perú, Paraguay,
          Chile y Argentina).
        </p>
      <?php endif; ?>
    </div>
  </div> <!-- final blur -->
</div> <!-- final inicio -->


<div class="seccion" id="inicio2" style="overflow:visible;">
  <div class="conocenos-container">
    <div class="conocenos">
      <h1>Conócenos</h1>
    </div>
    <div class="circulo-conocenos"></div><!-- decorativo -->
    <div class="texto-conocenos">
      <?php $titulo_conocenos = get_option('titulo_conocenos_seccion_inicio', 'Nuestros principios de actuación'); ?>
        <h1><?php echo wp_kses( strip_tags( $titulo_conocenos ) , array() ) ?></h1>

      <!-- Párrafos de principios de actuación -->
      <div id="contenedor-parrafos">
        <?php
          $loop = new WP_Query( array(
            'post_type' => 'principios-inicio'
          ) );
          if ( $loop->have_posts() ) :
            while( $loop->have_posts() ) : $loop->the_post() ?>
              <div class="parrafo">
                <p><?php the_content() ?></p>
              </div>
        <?php   
            endwhile;
          else :
        ?>
          <div class="parrafo">
            <p>
              <strong>Compromiso en todas las etapas del proyecto,</strong>
              ya que nuestra imagen se alimenta y crece del éxito
              de nuestros clientes, es por ello que participamos y
              nos involucramos en todos los pilares que conforman
              el desarrollo del proyecto desde el proceso corporativo
              hasta la operación.
            </p>
          </div>
          <div class="parrafo">
            <p>
              <strong>Duro con el problema suave con la persona, </strong>
              invitamos a todos los involucrados del proceso a buscar
              soluciones y mejoras a aquellos procesos que pueden gestionarse mejor.
            </p>
          </div>
            <div class="parrafo">
            <p>
              <strong>Hacer el acompañamiento con excelencia desde el inicio, </strong>
              evidenciando la credibilidad técnica de nuestro equipo de consultores,
              evitándose el desgaste innecesario de las personas y reduciendo la pérdida
              de dinero.
            </p>
          </div>
          <div class="parrafo">
            <p>
              <strong>El volumen de ventas es una consecuencia de la ejecución, </strong>
              por lo que monitoreamos ésta a través de indicadores de gestión, accionando
              en consecuencia de ellos, mejorando el desempeño cualitativo y cuantitativo.
            </p>
          </div>
          <div class="parrafo">
            <p>
              <strong>Nos basamos en hechos y cifras, sustentando todos</strong>
              nuestros planteamientos en conocimiento y experticia técnica que
              nos permite soportar de manera contundente las propuestas y recomendaciones.
            </p>
          </div>
          <div class="parrafo">
            <p>
              <strong>Modelamos la teoría en la práctica, trabajando con tu equipo</strong>
              para formar hábitos profesionales que aseguren la sostenibilidad
              de la ejecución de la estrategia
            </p>
          </div>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div><!-- final inicio2 -->
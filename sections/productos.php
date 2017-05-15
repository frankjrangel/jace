<?php $template_uri = get_template_directory_uri(); ?>

<div class="seccion" id="productos-y-servicios">
  <style>
    #productos-y-servicios
    {
      background: url('<?php echo $template_uri ?>/imagenes/fondo_productos.png');
      background-size: cover;
      background-position: center;
    }
  </style>
  <div class="blur">
    <div class="titulo-productos">
      <?php
        $titulo_productos = false;
        if ( $titulo_productos ) :
          // Sacar de base de datos
        else :
      ?>
        <h1>Desarrollo de metodologías profesionales</h1>
        <h2>Conoce nuestros productos</h2>
      <?php endif; ?>
    </div>
    <div class="contenedor-productos-y-servicios">
      <?php
        $loop = new WP_Query( array(
          'post_type' => 'metodologias-jace'
        ) );
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="producto">
              <div class="contenedor-imagen">
                <?php the_post_thumbnail(); ?>
                <div class="flecha"></div>
              </div>
              <p>
                <?php the_title(); ?>
              </p>
            </div>
            <div class="descripcion-producto">
              <div class="nombre">
                <h2><?php the_field( 'titulo_de_descripcion' ); ?></h2>
                <div class="cerrar-producto"></div>
              </div>
              <div class="fases">
                <?php the_content(); ?>
              </div>
            </div>
      <?php
          endwhile;
          wp_reset_postdata();
        else :
      ?>
        <div class="producto">
          <div class="contenedor-imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/metodologia.svg" alt="metodologia de procesos" />
            <div class="flecha"></div>
          </div>
          <p>
            Metodología de procesos de negocio con
            foco en CAPITALIZAR LAS BRECHAS en los
            procesos comerciales
          </p>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <h2>Instrumentos en procesos de gestión comercial</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <h4>Diagnóstico</h4>
              <p>
                Generar compromiso y alineación para el cambio.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <h4>Marco conceptual</h4>
              <p>
                Desarrollo de Guía de procesos.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <h4>Implementación</h4>
              <p>
                Acompañamiento en Ejecución de los procesos metodológicos.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 4</h3>
              <h4>Auditoría de procesos</h4>
              <p>
                Comprobación de los niveles de madurez alcanzados.
              </p>
            </div>
          </div>
        </div>
        <div class="producto">
          <div class="contenedor-imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/ejecucion.svg" alt="ejecucion de tienda" />
            <div class="flecha"></div>
          </div>
          <p>
            Ejecución de tienda perfecta MAPS
          </p>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <h2>Ejecución de tienda perfecta</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <p>
                Ejecutar auditoría por punto de venta en función del alcance definido.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <p>
                Desarrollar scorecard calidad de ejecución.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <p>
                Diseñar en conjunto plan para cierre de brechas.
              </p>
            </div>
          </div>
        </div>
        <div class="producto">
          <div class="contenedor-imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/auditorias.svg" alt="auditorias de procesos" />
            <div class="flecha"></div>
          </div>
          <p>
            Auditorias de Procesos (Distribuidores, Trade Marketing, Ventas , Gestión Comercial)
          </p>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <h2>Metodología de gestión para procesos comerciales</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <h4>Comprensión</h4>
              <p>
                Unificar criterios e interpretaciones para todos los procesos, subprocesos a revisar/auditar.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <h4>Revisión / Auditoría</h4>
              <p>
                Detectar las áreas de oportunidad con mayor impacto sobre el negocio.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <h4>Retroalimentación</h4>
              <p>
                Invitar a la acción, a cerrar brechas y a mejorar a través de la definición de un plan.
              </p>
            </div>
          </div>
        </div>
        <div class="producto">
          <div class="contenedor-imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/programas_capacitacion.svg" alt="programas de capacitacion" />
            <div class="flecha"></div>
          </div>
          <p>
            Programas de capacitación
          </p>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <h2>Programas de capacitación</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <ul>
              <li>Reuniones<span> de ventas</span></li>
              <li>Manejo<span> e interpretación de KPI's</span></li>
              <li>Procedimientos<span> de atención al punto de venta</span></li>
              <li>Plan<span> de negocios</span></li>
              <li>Estructuración<span> de rutas</span></li>
              <li>Administración<span> del tiempo</span></li>
              <li>Análisis<span> geográfico de cobertura</span></li>
            </ul>
          </div>
        </div>
        <div class="producto">
          <div class="contenedor-imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/road_to_market.svg" alt="road to market" />
            <div class="flecha"></div>
          </div>
          <p>
            Diseño del Road to Market
          </p>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <h2>Definición de la Estrategia Comercial Óptima para llegar al Mercado</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <p>
                Entendimiento del Norte estratégico del cliente, metas y objetivos.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <h4>Diagnóstico</h4>
              <p>
                Evaluación de Campo en las diferentes regiones y/o áreas del Negocio, de modelos de distribución existentes.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <h4>Retroalimentación / Recomendación</h4>
              <p>
                Propuesta de modelo a implementar, ajustar, corregir y/o cambiar.
                Implicaciones, alcance y mayores retos.
              </p>
            </div>
          </div>
        </div>
        <div class="producto">
          <div class="contenedor-imagen">
            <img src="<?php echo $template_uri; ?>/imagenes/coaching.svg" alt="coaching comercial" />
            <div class="flecha"></div>
          </div>
          <p>
            Coaching Comercial
          </p>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <h2>Orientado a generar los ajustes y/o cambios en procesos con brechas de resultados</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <p>
                Conversación de Alineación / Aceptación / Rol del Líder de Ejecución.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <p>
                Observación diversa de momentos de trabajo.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <p>
                Plan de Cierre de Brechas.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 4</h3>
              <p>
                Cierre y validación de acuerdos.
              </p>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <div class="fill-productos"></div>
      <div class="contenedor-productos-desktop">
      <?php
        $loop = new WP_Query( array (
          'post_type' => 'metodologias-jace'
        ) );
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="descripcion-producto">
              <div class="nombre">
                <div class="icono">
                  <?php the_post_thumbnail(); ?>
                </div>
                <h2><?php the_field( 'titulo_de_descripcion' ); ?></h2>
                <div class="cerrar-producto"></div>
              </div>
              <div class="fases">
                <?php the_content(); ?>
              </div>
              <div class="relleno-producto"></div>
            </div>
      <?php
          endwhile;
          wp_reset_postdata();
        else:
      ?>
        <div class="descripcion-producto">
          <div class="nombre">
            <div class="icono">
              <img src="<?php echo $template_uri; ?>/imagenes/metodologia.svg" />
            </div>
            <h2>Instrumentos en procesos de gestión comercial</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <h4>Diagnóstico</h4>
              <p>
                Generar compromiso y alineación para el cambio.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <h4>Marco conceptual</h4>
              <p>
                Desarrollo de Guía de procesos.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <h4>Implementación</h4>
              <p>
                Acompañamiento en Ejecución de los procesos metodológicos.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 4</h3>
              <h4>Auditoría de procesos</h4>
              <p>
                Comprobación de los niveles de madurez alcanzados.
              </p>
            </div>
          </div>
          <div class="relleno-producto"></div>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <div class="icono">
              <img src="<?php  echo $template_uri; ?>/imagenes/ejecucion.svg" alt="ejecucion de tienda"/>
            </div>
            <h2>Ejecución de tienda perfecta</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <p>
                Ejecutar auditoría por punto de venta en función del alcance definido.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <p>
                Desarrollar scorecard calidad de ejecución.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <p>
                Diseñar en conjunto plan para cierre de brechas.
              </p>
            </div>
          </div>
          <div class="relleno-producto"></div>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <div class="icono">
              <img src="<?php echo $template_uri; ?>/imagenes/auditorias.svg" />
            </div>
            <h2>Metodología de gestión para procesos comerciales</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <h4>Comprensión</h4>
              <p>
                Unificar criterios e interpretaciones para todos los procesos, subprocesos a revisar/auditar.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <h4>Revisión / Auditoría</h4>
              <p>
                Detectar las áreas de oportunidad con mayor impacto sobre el negocio.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <h4>Retroalimentación</h4>
              <p>
                Invitar a la acción, a cerrar brechas y a mejorar a través de la definición de un plan.
              </p>
            </div>
          </div>
          <div class="relleno-producto"></div>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <div class="icono">
              <img src="<?php echo $template_uri; ?>/imagenes/programas_capacitacion.svg" />
            </div>
            <h2>Programas de capacitación</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <ul>
              <li>Reuniones<span> de ventas</span></li>
              <li>Manejo<span> e interpretación de KPI's</span></li>
              <li>Procedimientos<span> de atención al punto de venta</span></li>
              <li>Plan<span> de negocios</span></li>
              <li>Estructuración<span> de rutas</span></li>
              <li>Administración<span> del tiempo</span></li>
              <li>Análisis<span> geográfico de cobertura</span></li>
            </ul>
          </div>
          <div class="relleno-producto"></div>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <div class="icono">
              <img src="<?php echo $template_uri; ?>/imagenes/road_to_market.svg" alt="road to market" />
            </div>
            <h2>Definición de la Estrategia Comercial Óptima para llegar al Mercado</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <p>
                Entendimiento del Norte estratégico del cliente, metas y objetivos.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <h4>Diagnóstico</h4>
              <p>
                Evaluación de Campo en las diferentes regiones y/o áreas del Negocio, de modelos de distribución existentes.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <h4>Retroalimentación / Recomendación</h4>
              <p>
                Propuesta de modelo a implementar, ajustar, corregir y/o cambiar.
                Implicaciones, alcance y mayores retos.
              </p>
            </div>
          </div>
          <div class="relleno-producto"></div>
        </div>
        <div class="descripcion-producto">
          <div class="nombre">
            <div class="icono">
              <img src="<?php echo $template_uri; ?>/imagenes/coaching.svg" />
            </div>
            <h2>Orientado a generar los ajustes y/o cambios en procesos con brechas de resultados</h2>
            <div class="cerrar-producto"></div>
          </div>
          <div class="fases">
            <div class="fase">
              <h3>Fase 1</h3>
              <p>
                Conversación de Alineación / Aceptación / Rol del Líder de Ejecución.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 2</h3>
              <p>
                Observación diversa de momentos de trabajo.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 3</h3>
              <p>
                Plan de Cierre de Brechas.
              </p>
            </div>
            <div class="fase">
              <h3>Fase 4</h3>
              <p>
                Cierre y validación de acuerdos.
              </p>
            </div>
          </div>
          <div class="relleno-producto"></div>
        </div>
      <?php endif; ?>
      </div>
    </div><!-- final .contenedor-productos-y-servicios -->
  </div><!-- final .blur -->
</div><!-- final #productos_y_servicios -->
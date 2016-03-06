<?php get_header(); ?>

<div class="seccion" id="inicio">
    <div class="blur">
        <style>
            <?php
                $hay_imagen_fondo_inicio = false; // Eliminar

            if ( $hay_imagen_fondo_inicio ) : ?>
                #inicio
                {
                    background: url();
                    background-size:cover;
                }
            <?php else : ?>
                #inicio
                {
                    background: url('<?php echo get_template_directory_uri(); ?>/imagenes/fondo_inicio.jpg');
                    background-size:cover;
                }
            <?php endif; ?>
        </style>

        <div id="panel-negro-tope-izquierdo"></div><!-- decorativo -->

        <div class="titulo-seccion">
            <?php
                $hay_texto_en_bd = false; // Eliminar
                if ( $hay_texto_en_bd ) :
                    // Sacar texto
                else :
                    echo 'ASESORÍA, CONSULTORÍA, ENTRENAMIENTO <br /> <span>Y AUDITORÍA INTEGRAL EN PROCESOS COMERCIALES<span>';
                endif;
            ?>
        </div>

        <div class="subtitulo-seccion">
            <?php
                if ( $hay_texto_en_bd ) :
                    // Sacar texto
                else :
                    echo 'Desde 1998 brindamos asesoría a empresas trasnacionales y nacionales,
                            fabricantes y distribuidores de diversas categorías de productos
                            de consumo masivo en varios latinoamérica';
                endif;
            ?>
        </div>

        <div class="texto">
            <?php
                if ( $hay_texto_en_bd ) :
                    // Obtener texto
                else :
            ?>
                <p>
                    Somos una empresa dedicada a la asesoría, consultoría,
                    entrenamiento y auditoría integral en procesos
                    comerciales y de soporte a ventas, especializada en
                    áreas como Ventas, distribución, trade marketing y
                    recursos humanos.
                </p>
                <p>
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
                    Chile y Argentina)
                </p>
            <?php endif; ?>
        </div>
    </div> <!-- final blur -->
</div> <!-- final inicio -->
<div class="seccion" id="inicio2">
    <div class="conocenos-container">
        <div class="conocenos">
            <h1>Conócenos</h1>
        </div>
        <div class="circulo-conocenos"></div><!-- decorativo -->
        <div class="texto-conocenos">
            <?php $titulo_conocenos = false;
                if ( $titulo_conocenos ) :
                    // Obtener titulo
                else :
            ?>
                <h1>Nuestros principios de actuación</h1>
            <?php endif; ?>

            <!-- Párrafos de principios de actuación -->
            <div id="contenedor-parrafos">
                <?php
                    $hay_parrafos_principios = false;
                    if ( $hay_parrafos_principios ) :
                        // Obtener parrafos y loopear
                    else :
                ?>
                    <div class="parrafo">
                        <p>
                            <span>Compromiso en todas las etapas del proyecto,</span>
                            ya que nuestra imagen se alimenta y crece del éxito
                            de nuestros clientes, es por ello que participamos y
                            nos involucramos en todos los pilares que conforman
                            el desarrollo del proyecto desde el proceso corporativo
                            hasta la operación.
                        </p>
                    </div>
                    <div class="parrafo">
                        <p>
                            <span>Duro con el problema suave con la persona, </span>
                            invitamos a todos los involucrados del proceso a buscar
                            soluciones y mejoras a aquellos procesos que pueden gestionarse mejor.
                        </p>
                    </div>
                        <div class="parrafo">
                        <p>
                            <span>Hacer el acompañamiento con excelencia desde el inicio, </span>
                            evidenciando la credibilidad técnica de nuestro equipo de consultores,
                            evitándose el desgaste innecesario de las personas y reduciendo la pérdida
                            de dinero.
                        </p>
                    </div>
                    <div class="parrafo">
                        <p>
                            <span>El volumen de ventas es una consecuencia de la ejecución, </span>
                            por lo que monitoreamos ésta a través de indicadores de gestión, accionando
                            en consecuencia de ellos, mejorando el desempeño cualitativo y cuantitativo.
                        </p>
                    </div>
                    <div class="parrafo">
                        <p>
                            <span>Nos basamos en hechos y cifras, sustentando todos</span>
                            nuestros planteamientos en conocimiento y experticia técnica que
                            nos permite soportar de manera contundente las propuestas y recomendaciones.
                        </p>
                    </div>
                    <div class="parrafo">
                        <p>
                            <span>Modelaos la teoría en la práctica, trabajando con tu equipo</span>
                            para formar hábitos profesionales que aseguren la sostenibilidad
                            de la ejecución de la estrategia
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div><!-- final inicio2 -->

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
	 height="200px" viewBox="0 20 950 100" xml:space="preserve">
<style type="text/css">
<![CDATA[
	.st0{fill:#262323;}
	.st1{fill:#C67037;}
	.st2{display:inline;}
	.st3{fill:#323B45;}
	.st4{fill:#010202;}
	.st5{display:none;}
]]>
</style>
<g id="Capa_1">
	<g>
		<polygon class="st0" points="989.501,64.632 439.263,37.834 -4.408,77.243 -4.408,0 679.474,0 989.501,0 		"/>
		<polygon class="st3" points="989.501,87.394 436.157,37.405 989.501,44.667 		"/>
		<polygon class="st3" points="-4.435,57.422 310.36,48.853 -3.605,81.265 		"/>
		<polygon class="st4" points="-4.435,76.815 439.237,37.405 -4.435,117.405 		"/>
	</g>
</g>
<g id="Capa_2" class="st5">
	<g class="st2">
		<path class="st1" d="M84.478,258.299c3.944,0.389,7.816-1.226,11.192-3.103c4.682-2.603,8.848-6.137,12.689-9.841
			c8.577-8.271,16.06-18.163,21.368-28.843c2.001-4.026,3.757-8.338,4.339-12.825c0.376-2.9,0.111-6.231-2.174-8.322
			c-2.984-2.733-8.704-2.532-11.773-0.183c-4.208,3.22-3.099,9.753-1.106,13.864c2.958,6.104,9.85,9.586,15.912,11.842
			c7.818,2.91,16.254,4.026,24.522,4.731c8.169,0.697,16.37,0.805,24.554,1.225c11.168,0.572,22.323,1.341,33.496,1.834
			c48.026,2.118,96.475,1.389,144.047-6.136c10.63-1.681,21.216-3.768,31.59-6.64c7.911-2.19,15.855-4.796,22.908-9.08
			c6.002-3.646,11.883-9.292,12.522-16.669c0.612-7.07-6.167-11.215-12.538-9.042c-6.514,2.222-10.306,9.747-12.238,15.852
			c-1.98,6.257-2.965,13.302-0.969,19.675c3.445,11.004,15.488,14.997,25.807,16.353c8.918,1.172,18.045,0.716,26.953-0.322
			c0.278-0.033,0.281-0.474,0-0.44c-12.203,1.423-25.395,2.011-37.199-1.966c-5.39-1.817-10.43-4.961-13.42-9.917
			c-3.598-5.966-3.182-13.363-1.651-19.892c1.692-7.224,5.37-16.053,12.835-18.918c4.029-1.546,8.963-0.216,11.084,3.671
			c1.98,3.63,0.615,8.317-1.316,11.644c-4.313,7.432-12.882,11.658-20.584,14.652c-8.292,3.223-17.035,5.38-25.717,7.247
			c-23.576,5.068-47.736,7.491-71.77,9.101c-24.248,1.624-48.579,1.721-72.864,1.027c-21.09-0.603-42.13-2.114-63.208-2.975
			c-8.764-0.358-17.557-0.9-26.183-2.569c-7.974-1.543-16.104-4.192-22.363-9.555c-4.401-3.771-7.672-11.666-4.051-16.973
			c2.646-3.879,10.108-4.039,13.091-0.412c2.292,2.787,1.565,7.165,0.77,10.352c-1.26,5.051-3.659,9.818-6.243,14.306
			c-5.41,9.395-12.345,18.091-20.293,25.46c-3.516,3.261-7.33,6.277-11.548,8.581c-3.161,1.725-6.807,3.126-10.469,2.766
			C84.195,257.831,84.198,258.271,84.478,258.299L84.478,258.299z"/>
	</g>
</g>
</svg>

<div class="seccion" id="por-que">
    <div class="texto-container medio">
    <?php
        $titulo_porque = false;
        if ( $titulo_porque ) :
            // Sacar titulo
        else :
    ?>
        <h1>¿Por qué somos tu opción?</h1>
    <?php endif;
        $texto_porque = false;
        if ( $texto_porque ) :
            // Sacar texto
        else :
    ?>
        <p>Desarrollamos e implementamos soluciones integrales
            involucrando al talento interno del cliente, ajustadas
            a sus necesidades y oportunidades; soportando su estrategia
            comercial y logrando un crecimiento sustentable.
        </p>
        <p>
            Los resultados obtenidos en las implementaciones
            realizadas, han propiciado relaciones comerciales de
            largo plazo con nuestros clientes.
        </p>
        <p>
            Nos hemos distinguido por lograr cambios culturales
            en las organizaciones acompañados de plan
            comunicacional interno y una metodología para el
            manejo del cambio.
        </p>
        <p>
            Formamos y certicamos facilitadores internos en
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
    <div class="mapa-container medio">

    </div>
    <div class="linea-naranja"></div><!-- decorativo -->
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
                $hay_categorias = false;
                if ( $hay_categorias ) :
                    //Correr loop y obtener categorias
            ?>

            <?php else : ?>
                <div class="categoria">
                    <div class="imagen">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/food.svg" alt="food" />
                    </div>
                    <div class="texto">
                        <h2>FOOD</h2>
                        <p>Pastas, harinas, galletas, cereales, etc.</p>
                    </div>
                </div>
                <div class="categoria">
                    <div class="imagen">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/beverages.svg" alt="beverages" />
                    </div>
                    <div class="texto">
                        <h2>BEVERAGES</h2>
                        <p>Jugos, whisky, ron, bebidas energizantes.</p>
                    </div>
                </div>
                <div class="categoria">
                    <div class="imagen">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/home.svg" alt="home cleaning" />
                    </div>
                    <div class="texto">
                        <h2>HOME CLEANING</h2>
                        <p>Insecticidas, desinfectantes, toilet, kitchen, detergentes, suavizantes, air care, auto care, etc.</p>
                    </div>
                </div>
                <div class="categoria">
                    <div class="imagen">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/personal.svg" alt="personal care" />
                    </div>
                    <div class="texto">
                        <h2>PERSONAL CARE</h2>
                        <p>Shampoo, protección, sanitaria, baby care, etc.</p>
                    </div>
                </div>
                <div class="categoria">
                    <div class="imagen">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/other.svg" alt="other categories" />
                    </div>
                    <div class="texto">
                        <h2>OTHER CATEGORIES</h2>
                        <p>Lubricantes de automóviles, distribución de prensa escrita a retailers.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="seccion" id="grupo-jace">
    <div class="blur">
    <div class="panel-negro-tope-derecho"></div><!-- decorativo -->
    <div class="circulo-naranja">
        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/circulo_naranja.svg" />
    </div><!-- decorativo -->
        <style>
            <?php
                $fondo_grupo_jace = false;
                if ( $fondo_grupo_jace ) :
            ?>
                #grupo-jace
                {
                    background: url();
                    background-size: cover;
                    background-position: center;
                }
            <?php else : ?>
                #grupo-jace
                {
                    background: url('<?php echo get_template_directory_uri(); ?>/imagenes/fondo_grupo_jace.jpg');
                    background-size: cover;
                    background-position: center;
                }
            <?php endif; ?>
        </style>
        <h1>Conoce nuestro equipo de trabajo</h1>
        <div class="contenedor-grupo">

            <div id="contenedor-equipo">
                <?php
                    $hay_equipo = false;
                    if ( $hay_equipo ) :
                        // Correr loop y sacar equipo
                    else :
                ?>
                <div class="integrante">
                    <div class="foto">
                        <img src="imagenes/" />
                    </div>
                    <div class="texto">
                        <h2>YULY CÁRDENAS</h2><br />
                        <h3>Psicólogo</h3><br />
                        <h2>ARGENTINA</h2>
                    </div>
                    <div class="redes">
                    </div>
                </div>
                <div class="integrante">
                    <div class="foto">
                        <img src="imagenes/"/>
                    </div>
                    <div class="texto">
                        <h2>CARLOS GARCÍA</h2><br />
                        <h3>Abogado</h3><br />
                        <h2>ARGENTINA</h2>
                    </div>
                    <div class="redes">
                    </div>
                </div>
                <div class="integrante">
                    <div class="foto">
                        <img src="imagenes/"/>
                    </div>
                    <div class="texto">
                        <h2>TOMAS LORENZO</h2><br />
                        <h3>Lic. Administrador</h3><br />
                        <h2>VENEZUELA</h2>
                    </div>
                    <div class="redes">
                    </div>
                </div>
                <div class="integrante">
                    <div class="foto">
                        <img src="imagenes/"/>
                    </div>
                    <div class="texto">
                        <h2>CARLOS MONTIEL</h2><br />
                        <h3>Lic. Relaciones Industriales</h3><br />
                        <h2>VENEZUELA</h2>
                    </div>
                    <div class="redes">
                    </div>
                </div>
                <div class="integrante">
                    <div class="foto">
                        <img src="imagenes/"/>
                    </div>
                    <div class="texto">
                        <h2>JORGE FLORES</h2><br />
                        <h3>Lic. Administración de Empresas</h3><br />
                        <h2>GUATEMALA</h2>
                    </div>
                    <div class="redes">
                    </div>
                </div>
                <div class="integrante">
                    <div class="foto">
                        <img src="imagenes/"/>
                    </div>
                    <div class="texto">
                        <h2>JAIME CÁRDENAS</h2><br />
                        <h3>Ing. Indrustrial</h3><br />
                        <h2>ARGENTINA</h2>
                    </div>
                    <div class="redes">
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div><!-- final .contenedor-grupo -->
        <div id="fill-grupo"></div><!-- decorativo -->
        <div id="relleno-grupo"></div><!-- decorativo -->

    </div><!-- final .blur -->
    <div id="footer-grupo">
        <?php
            $texto_footer_grupo = false;
            if ( $texto_footer_grupo ) :
                // Sacar info base de datos
            else :
        ?>
            <p>
                Amplia experiencia en empresas de consumo Masivo tales como Unilever, Clorox, Quaker, Mavesa,
                J&J, S.C. Johnson, Loreal; en funciones diversas como Trade Marketing, Customer Service, Category
                Managment, Key Account MT, Distribución TT, y Project Lead.
            </p>
        <?php endif; ?>
    </div>
</div><!-- final #grupo-jace -->

<div class="seccion" id="productos-y-servicios">
    <style>
        <?php
            $fondo_productos = false;
            if ( $fondo_productos ) :
        ?>
            #productos-y-servicios
            {
                background: url();
                background-size: cover;
                background-position: center;
            }
        <?php else : ?>
            #productos-y-servicios
            {
                background: url('<?php echo get_template_directory_uri(); ?>/imagenes/fondo_productos.jpg');
                background-size: cover;
                background-position: center;
            }
        <?php endif; ?>
    </style>
    <div class="blur">
        <?php
            $titulo_productos = false;
            if ( $titulo_productos ) :
                // Sacar de base de datos
            else :
        ?>
            <h1>Desarrollo de metodologías profesionales</h1>
            <h2>Conoce nuestros productos</h2>
        <?php endif; ?>
        <div class="contenedor-productos-y-servicios">
            <?php
                $template_uri = get_template_directory_uri();
                $productos_y_servicios = false;
                if ( $productos_y_servicios ) :
                    // Loop de productos_y_servicios
                else :
            ?>
                <div class="producto">
                    <div class="contenedor-imagen">
                        <div class="contenedor-imagen2">
                            <img src="<?php echo $template_uri; ?>/imagenes/metodologia.svg" alt="metodologia de procesos" />
                        </div>
                    </div>
                    <p>
                        Metodología de procesos de negocio con
                        foco en CAPITALIZAR LAS BRECHAS en los
                        procesos comerciales
                    </p>
                </div>
                <div class="producto">
                    <div class="contenedor-imagen">
                        <div class="contenedor-imagen2">
                            <img src="<?php echo $template_uri; ?>/imagenes/ejecucion.svg" alt="ejecucion de tienda" />
                        </div>
                    </div>
                    <p>
                        Ejecución de tienda perfecta MAPS
                    </p>
                </div>
                <div class="producto">
                    <div class="contenedor-imagen">
                        <div class="contenedor-imagen2">
                            <img src="<?php echo $template_uri; ?>/imagenes/auditorias.svg" alt="auditorias de procesos" />
                        </div>
                    </div>
                    <p>
                        Auditorias de Procesos (Distribuidores, Trade Marketing, Ventas , Gestión Comercial)
                    </p>
                </div>
                <div class="producto">
                    <div class="contenedor-imagen">
                        <div class="contenedor-imagen2">
                            <img src="<?php echo $template_uri; ?>/imagenes/programas_capacitacion.svg" alt="programas de capacitacion" />
                        </div>
                    </div>
                    <p>
                        Programas de capacitación
                    </p>
                </div>
                <div class="producto">
                    <div class="contenedor-imagen">
                        <div class="contenedor-imagen2">
                            <img src="<?php echo $template_uri; ?>/imagenes/road_to_market.svg" alt="road to market" />
                        </div>
                    </div>
                    <p>
                        Diseño del Road to Market
                    </p>
                </div>
                <div class="producto">
                    <div class="contenedor-imagen">
                        <div class="contenedor-imagen2">
                            <img src="<?php echo $template_uri; ?>/imagenes/coaching.svg" alt="coaching comercial" />
                        </div>
                    </div>
                    <p>
                        Coaching Comercial
                    </p>
                </div>
            <?php endif; ?>
            <div class="contenido-producto">

            </div>
        </div><!-- final .contenedor-productos-y-servicios -->
    </div><!-- final .blur -->
</div><!-- final #productos_y_servicios -->

<div class="seccion" id="clientes-y-aliados">
    <style>
        <?php
            $fondo_clientes= false;
            if ( $fondo_clientes ) :
        ?>
            #clientes-y-aliados
            {
                background: url();
                background-size: cover;
                background-position: center;
            }
        <?php else : ?>
            #clientes-y-aliados
            {
                background: url('<?php echo get_template_directory_uri(); ?>/imagenes/fondo_clientes.jpg');
                background-size: cover;
                background-position: center;
            }
        <?php endif; ?>
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
            <!-- TODO implementar loop segun categorias -->
            <?php
                $hay_categorias = false;
                if ( $hay_categorias ) :
                    // Sacar loop de categorías
                else :
            ?>
                <div>
                    <h2>REGIONALES - NACIONALES</h2>
                    <div class="marcas">
                        <img src="<?php echo $template_uri; ?>/imagenes/molinos_modernos.png" alt="molinos modernos" />
                        <img src="<?php echo $template_uri; ?>/imagenes/demasa.png" alt="demasa" />
                        <img src="<?php echo $template_uri; ?>/imagenes/monaca.png" alt="monaca" />
                        <img src="<?php echo $template_uri; ?>/imagenes/mavesa.png" alt="mavesa" />
                        <img src="<?php echo $template_uri; ?>/imagenes/alfonso_rivas.png" alt="alfonso rivas" />
                        <img src="<?php echo $template_uri; ?>/imagenes/frutika.png" alt="frutika" />
                        <div style="width:100%;clear: both;"></div>
                    </div>
                </div>
                <div>
                    <h2>TRANSNACIONALES</h2>
                    <div class="marcas">
                        <img src="<?php echo $template_uri; ?>/imagenes/johnson.png" alt="johnson" />
                        <img src="<?php echo $template_uri; ?>/imagenes/diageo.png" alt="diageo" />
                        <img src="<?php echo $template_uri; ?>/imagenes/colgate_palmolive.png" alt="colgate palmolive" />
                        <img src="<?php echo $template_uri; ?>/imagenes/bp.png" alt="bp" />
                        <img src="<?php echo $template_uri; ?>/imagenes/johnson_and_johnson.png" alt="johnson" />
                        <img src="<?php echo $template_uri; ?>/imagenes/heinz.png" alt="heinz" />
                        <img src="<?php echo $template_uri; ?>/imagenes/concha_y_toro.png" alt="concha y toro" />
                        <img src="<?php echo $template_uri; ?>/imagenes/kellogs.png" alt="kellogs" />
                        <div style="width:100%;clear: both;"></div>
                    </div>
                </div>
                <div>
                    <h2>DISTRIBUIDORAS</h2>
                    <div class="marcas">
                        <img src="<?php echo $template_uri; ?>/imagenes/alcipal.png" alt="alcipal" />
                        <img src="<?php echo $template_uri; ?>/imagenes/euro_group.png" alt="euro group" />
                        <img src="<?php echo $template_uri; ?>/imagenes/cocensa.png" alt="cocensa" />
                        <img src="<?php echo $template_uri; ?>/imagenes/diroca.png" alt="diroca" />
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

<!-- <div class="seccion" id="captacion-de-talento">

</div> -->

<div class="seccion" id="contacto">
    <style>
        <?php
            $fondo_contacto = false;
            if ( $fondo_contacto ) :
        ?>
            #contacto
            {
                background: url();
                background-size: cover;
                background-position: center;
            }
        <?php else : ?>
            #contacto
            {
                background: url('<?php echo get_template_directory_uri(); ?>/imagenes/fondo_contacto.jpg');
                background-size: cover;
                background-position: center;
            }
        <?php endif; ?>
    </style>
    <div class="blur">
        <h1>Conózcanos</h1>
        <p>Queremos saber de tus ideas y proyectos, escríbenos y hagámoslo realidad</p>
        <div id="formulario-conozcanos">
            <?php
                if( function_exists( 'ninja_forms_display_form' ) )
                    ninja_forms_display_form( 1 );
            ?>
        </div>
    </div>
    <div id="footer-formulario">
        <!-- redes jace -->
    </div>
</div> <!-- final #contacto -->

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- nav script -->
<script>
    // ﻿$('a[href*=#]:not([href=#])').click(function () {
    //     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    //         var target = $(this.hash) ;
    //         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    //         if (target.length) {
    //             $('html,body').animate({
    //                 scrollTop: target.offset().top - 98
    //             }, 800);
    //             return false;
    //         }
    //     }
    // });

    function menu() {
        window.addEventListener('scroll', function (e) {
            var distanciaTope = window.pageYOffset;
            // if ($(window).scrollTop() == $(document).height() - $(window).height() ) {
            //     $('header nav ul li:nth-child(5)').addClass('hover');
            //     $('header nav ul li:nth-child(1)').removeClass('hover');
            //     $('header nav ul li:nth-child(2)').removeClass('hover');
            //     $('header nav ul li:nth-child(3)').removeClass('hover');
            //     $('header nav ul li:nth-child(4)').removeClass('hover');
            //     $('#menu-mobile #track p').text('CONTACTO');
            // } else if (distanciaTope < $('#servicios').offset().top - ($(window).height())/2) {
            //     $('header nav ul li:nth-child(1)').addClass('hover');
            //     $('header nav ul li:nth-child(2)').removeClass('hover');
            //     $('header nav ul li:nth-child(3)').removeClass('hover');
            //     $('header nav ul li:nth-child(4)').removeClass('hover');
            //     $('header nav ul li:nth-child(5)').removeClass('hover');
            //     $('#menu-mobile #track p').text('');
            // } else if (distanciaTope < $('#portafolio').offset().top - ($(window).height())/2) {
            //     $('header nav ul li:nth-child(2)').addClass('hover');
            //     $('header nav ul li:nth-child(1)').removeClass('hover');
            //     $('header nav ul li:nth-child(3)').removeClass('hover');
            //     $('header nav ul li:nth-child(4)').removeClass('hover');
            //     $('header nav ul li:nth-child(5)').removeClass('hover');
            //     $('#menu-mobile #track p').text('SERVICIOS');
            // } else if (distanciaTope < $('#equipo').offset().top - ($(window).height())/2) {
            //     $('header nav ul li:nth-child(3)').addClass('hover');
            //     $('header nav ul li:nth-child(1)').removeClass('hover');
            //     $('header nav ul li:nth-child(2)').removeClass('hover');
            //     $('header nav ul li:nth-child(4)').removeClass('hover');
            //     $('header nav ul li:nth-child(5)').removeClass('hover');
            //     $('#menu-mobile #track p').text('PORTAFOLIO');
            // } else if (distanciaTope < $('footer').offset().top - ($(window).height())/2) {
            //     $('header nav ul li:nth-child(4)').addClass('hover');
            //     $('header nav ul li:nth-child(1)').removeClass('hover');
            //     $('header nav ul li:nth-child(2)').removeClass('hover');
            //     $('header nav ul li:nth-child(3)').removeClass('hover');
            //     $('header nav ul li:nth-child(5)').removeClass('hover');
            //     $('#menu-mobile #track p').text('EQUIPO');
            // }

            if (distanciaTope > 20)
            {
                $('.navbar').css('top', 0);
            }
            else
            {
                $('.navbar').css('top', 20);
            }

        });
    }
    window.onload = menu();

</script>

<?php get_footer(); ?>

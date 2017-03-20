        
        </main><!-- end.Main -->

        <footer>
            <div class="row">
                <div class="medium-8 large-10 columns textoAlineado">
                    <figure><img src="<?php echo get_template_directory_uri(''); ?>img/publico/logos/logo_revolver.png" alt="Revolver"></figure><p><small>REVOLVER <?php echo date('Y'); ?>, todos los derechos reservados</small></p>
                </div>
                <div class="medium-4 large-2 columns text-center">
                    <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </footer><!-- end.Footer -->
        
        <script type="text/javascript" src="<?php echo scriptsJs(); ?>"></script><!-- ScriptCustom -->
<?php $archivo = isset($_GET['sec']) ? $_GET['sec'] : ''; if($archivo == 'contacto') :  ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(''); ?>js/publico/scripts/min/contactFormulario.min.js?v=<?php echo date('Ymd'); ?>"></script><!-- formContacto -->
<?php else: ?>
<?php endif; ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
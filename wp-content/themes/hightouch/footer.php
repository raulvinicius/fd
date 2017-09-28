    <?php if ( !strpos( $_SERVER[ "REQUEST_URI" ], "contato" ) ) : ?>



        <footer>
             <div id="footer" class="<?php echo (isset( $GLOBALS['footerHome'] ) ) ? 'home' : '' ?> container-fluid">
                 <div class="row-fluid">

                     <a href="<?php bloginfo('url') ?>/contato" class="icone-fale">
                         <i class="radius-left"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-fale.png"></i>
                         <p class="radius">Fale com a gente</p>
                     </a>

                     <div class="address">
                         <address>
                             <p>CRS Quadra 505,<br>
                                Bloco C, Entrada 14,<br>
                                70350-530, Brasília-DF<br>
                             Fone: <strong>61.3244.2565</strong>
                             </p>
                         </address>
                     </div>

                     <ul class="redes-sociais">

                        <li>
                            <a class="icone-social" href="http://facebook.com/sejahi" target="_blank" title="Facebook">
                                <i class="radius-left">
                                    <img src="<?php bloginfo("template_url") ?>/img/hi-icon-facebook.png">
                                </i>
                                <p>/SejaHi</p>
                            </a>
                        </li>
                        <li>
                            <a class="icone-social" href="http://vimeo.com/sejahi" target="_blank" title="Vimeo">
                                <i class="radius-left">
                                    <img src="<?php bloginfo("template_url") ?>/img/hi-icon-vimeo.png">
                                </i>
                                <p>/SejaHi</p>
                            </a>
                        </li>

                     </ul>

                 </div>

                 <?php var_dump(get_userdata( get_current_user_id() )) ?>

             </div>
        </footer>

    <?php endif; ?>


    </section>     <!-- end hightouch -->



<!-- 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 -->
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url') ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.form.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.validate.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/main.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/bootstrap-carousel.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/bootstrap-transition.js"></script>

        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-47568443-1']);
          _gaq.push(['_setDomainName', 'sejahi.com.br']);
          _gaq.push(['_setAllowLinker', true]);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
        
    </body>
</html>

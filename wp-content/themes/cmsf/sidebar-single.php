<aside class="sidebar col-md-3 col-xs-12" style="border: 1px solid #ccc; margin-top: 65px;">
    <div class="widget">
        <!--sidebares-->
        <h2>Boas Vindas</h2>
        <div class="embed-responsive embed-responsive-4by3" style="margin-top: -20px; margin-bottom: 10px;">
            <?php 
               if ( is_active_sidebar('sidebar-youtube-video') ) {
                  dynamic_sidebar('sidebar-youtube-video');
                }
            ?>
        </div>
    </div>

    <div class="widget" style="margin-bottom: 0; margin-top: -3px;">
        <!--sidebares-->
        <!--<h2>Publicidade</h2>-->
        <h2>Eventos</h2>
        <div class="embed-responsive embed-responsive-4by3">
            <a href="<?php echo get_theme_mod( 'm3_banner-init' ); ?>" class="preview" rel="prettyPhoto"><img src="<?php echo get_theme_mod( 'm3_banner-init' ); ?>" class="img-responsive img-thumbnail" alt="Banner Publicitario"></a>
        </div>
    </div>

    <div class="widget" style="margin-bottom: 0; margin-top: 10px;">
        <h2>Facebook</h2>
        <div class="embed-responsive embed-responsive-4by3 like-face" style="text-align: center;">
            <?php 
               if ( is_active_sidebar('sidebar-facebook-like-box') ) {
                    dynamic_sidebar('sidebar-facebook-like-box');
                }
            ?>
        </div>
    </div>


</aside>
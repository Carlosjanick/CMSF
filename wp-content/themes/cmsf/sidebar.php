<aside class="sidebar col-md-3 col-xs-12" style="border: 1px solid #ccc;">
    <div class="widget" >
        <!--sidebares-->
        <h2>Boas Vindas</h2>
        <div class="embed-responsive embed-responsive-4by3" style="margin-top: -20px; margin-bottom: 10px;">
            <!--video popup-->
            <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LxJR6qh8qm8" rel="shadowbox">
            </iframe>-->
            <?php 
               if ( is_active_sidebar('sidebar-youtube-video') ) {
                dynamic_sidebar('sidebar-youtube-video');
                }
            ?>
        </div>
    </div>

    <div class="widget" style="margin-bottom: 20px; margin-top: -3px;">
        <!--sidebares-->
        <div class="embed-responsive embed-responsive-4by3">
            <a href="<?php echo get_theme_mod( 'm3_banner-init' ); ?>" class="preview" rel="prettyPhoto"><img src="<?php echo get_theme_mod( 'm3_banner-init' ); ?>" class="img-responsive img-thumbnail" alt="Banner Publicitario"></a>

            <!--<div class="recent-work-inner">
                <h3><a class="titulo-servico" href="#">There are many variations of passages of </a></h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                
                <div class="option-servico">
                    <a class="preview" href="<?php //bloginfo('template_directory'); ?>/img/01.jpg" rel="prettyPhoto">Ver <i class="fa fa-eye"></i></a>

                    <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> detalhes</a>
                </div>
            </div> -->
        </div>
    </div>
</aside>
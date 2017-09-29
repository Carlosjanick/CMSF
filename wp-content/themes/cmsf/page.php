<!--header-->
<?php get_header(); ?>
<main class="site-main page-main page-default-section" style="margin-bottom: 50px; margin-top: 20px;">
    <div class="home_content">
        <div class="container" style="margin-bottom: -60px;">
            <div class="row" >
                <section class="home-index">
                    <div class="pag_default">
                        <div class="col-md-9">
                            <div class="row content-page-default page-page">
                                <!--<h4 class="h4-center">Pagina default</h4>-->
                                <?php if (have_posts()): while (have_posts()) : the_post();?>
                                        <h6 class="h4-center"><?php the_title();?></h6>
                                        
                                        <?php the_content();?>
                                  <?php endwhile; else:?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div><!--home_list-->
                    <?php get_sidebar('single'); ?>
                </section>
            </div>
        </div>
    </section>
</main>

<!--footer-->
<?php get_footer(); ?>

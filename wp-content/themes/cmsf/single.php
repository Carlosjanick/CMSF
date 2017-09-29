<!--header-->
<?php get_header(); ?>
<main class="site-main page-main page-default-section" style="margin-bottom: 50px; margin-top: 20px;">
    <div class="home_content">
        <div class="container" style="margin-bottom: -60px;">
            <div class="row" >
                <section class="home-index">
                    <div class="pag_default">
                        <div class="col-md-9">
                            <div class="row content-page-default single-p">
                                <?php if (have_posts()): while (have_posts()) : the_post();?>
                                        <h6 class= "h4-single"><?php the_title();?></h6>
                                        <div class="img-single">
                                            <img src="<?php echo get_option('home');?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" title="<?php the_title();?>" class="img-responsive img-thumbnail" >
                                        </div>
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

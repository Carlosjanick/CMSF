<!--header-->
<?php get_header(); ?>
    <main class="site-main category-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 categoria_titulo">
                    <header>
                        <h2 class="titulo-pag"><?php
                                            global $post;
                                            $categoria = get_the_category($post->id);
                                            $nomeCategoria = $categoria[0]->cat_name;
                                            echo $nomeCategoria;
                        ?></h2>
                    </header>
                </div>
            </div>

            <div class="row">
                <section class="category-content col-md-12" style="margin-bottom: 15px;">
                   <?php if (have_posts()): while (have_posts()) : the_post();?>

                       <div class="item col-md-4">
                           <div class="single-blog-item">
                                <div class="blog-thumnail">
                                    <?php
                                        /*if(is_category('publicacao')){
                                            $img_key  = 'img';
                                         }else{
                                            $img_key  = 'projeto-img';
                                         }*/
                                    ?>
                                    <a href=""><img src="<?php echo get_option('home');?>/<?php $key= 'img';echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" title="<?php the_title();?>"></a>
                                </div>
                                <div class="blog-content">
                                    <?php $title = Check::Words(get_the_title(), 5); ?>
                                    <h4><a href="#"><?= $title; ?></a></h4>
                                    <!--<p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>-->
                                    <a href="<?php the_Permalink()?>" class="more-btn" title="<?php the_title();?>">Ver +</a>
                                </div>
                                <span class="blog-date"><?php the_time('j M Y');?></span>
                            </div>
                        </div><!--/.item-->

                     <?php endwhile; else:?>
                    <?php endif;?>
                </section><!--/.category-content-->

                <div class="pag-nator col-md-12" style="text-align: center;">
                        <?php wp_pagenavi(); ?>
                </div><!--/.pag-nator-->
            </div>
        </div>
    </main>
<!--footer-->
<?php get_footer(); ?>
        
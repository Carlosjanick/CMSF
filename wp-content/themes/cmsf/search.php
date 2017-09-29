<!--header-->
<?php get_header(); ?>
    <main class="site-main search-main">
        <div class="container">
            <div class="row">
                <section class="search-content col-md-12" style="margin-bottom: 15px;">
                   <?php if (have_posts()): while (have_posts()) : the_post();
                         /*if($post->post_type == 'page') continue;*/
                   ?>
                       <div class="item col-md-4">
                           <div class="single-blog-item">
                                <div class="blog-content">
                                    <?php $title = Check::Words(get_the_title(), 9); ?>
                                    <h4><a href="#"><?= $title; ?></a></h4>
                                    <!--<p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>-->
                                    <a href="<?php the_Permalink()?>" class="more-btn" title="<?php the_title();?>">Ver +</a>
                                </div>
                                <div style="text-align: center; margin-top: 3px; color: #7B3333; font-size: 11px;"><span class="" >Publicado em: <?php the_time('j M Y');?></span></div>
                            </div>
                        </div><!--/.item-->

                     <?php endwhile; else:?>
                        <article class="page_notfound row">
                            <div class="col-md-12">
                                <header class="cat_header">
                                    <h1>Não encontrado!!!</h1>
                                    <p class="tagline">Desculpe, a sua pesquisa não gerou um resultado valido! Favor tente outros termos.</p>
                                </header>
                            </div>
                        </article>
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
        
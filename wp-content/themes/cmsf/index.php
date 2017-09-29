<!--header-->
<?php get_header(); ?>
        <main class="site-main">

            <section class="hero_area">
                <div class="row">
                    <!-- Carousel -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php
                                $posts_slides = new WP_Query(array(
                                    'post_type'      => 'post',
                                    'category_name'  => 'slide-show',
                                    'posts_per_page' => 3
                                ));
                                $i = 1;
                                while($posts_slides->have_posts()):
                                    $posts_slides->the_post();
                                    //active
                                    $c_active = ($i == 1) ? ' active ' : '';
                                    $titulo_slide = Check::Words(get_the_title(), 5, ' '); 
                                    $content_slide = Check::Words(get_the_content(), 9, ' ');
                            ?>
                                <div class="item j_item <?php echo $c_active; ?>">
                                    <!--pega imagem destacada-->
                                     <?php the_post_thumbnail(); ?>
                                    <!-- Static Header -->
                                    <div class="header-text hidden-xs hidden-sm">
                                        <div class="col-md-12 text-center">
                                            <h2>
                                                <span><?= $titulo_slide; ?></span>
                                            </h2>
                                            <br>
                                            <h3>
                                                <span><?= $content_slide; ?></span>
                                            </h3>
                                            <br>
                                        </div>
                                    </div><!-- /header-text -->
                                </div>
                            <?php
                                $i++;
                                endwhile; wp_reset_postdata(); 
                            ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                    </div><!-- /carousel -->
                </div>
            </section><!--/.hero_area-->

            <section class="home-area">
                <div class="home_content">
                    <div class="container" style="margin-bottom: -60px;">
                        <div class="row" >
                            <section class="home-index">
                                <div class="col-md-12">
                                    <h2 class="sub_title">Ultimas Publicações</h2>
                                </div>
                                <div class="home_list">
                                    <div class="col-md-6 col-sm-5 col-xs-12">
                                        
                                        <?php query_posts('showposts=1&category_name=publicacao');?>
                                        <?php if (have_posts()): while (have_posts()) : the_post();?>
                                            <div class="noticia-destaque">
                                                <div class="thumbnail">
                                                    <img src="<?php echo get_option('home');?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" title="<?php the_title();?>"  class="img-responsive img-thumbnail">
                                                    <div class="caption">
                                                        <span class="data_pub">Publicado em: <?php the_time('j M Y');?></span>
                                                        <?php $title = Check::Words(get_the_title(), 6); ?>
                                                        <h3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?= $title; ?></a></h3>
                                                        <?php $conteudo = Check::Words(get_the_content(), 42); ?>
                                                        <p><?php echo $conteudo; ?></p>
                                                    </div>
                                                </div>
                                            </div> 
                                         <?php endwhile; else:?>
                                         <?php endif;?>

                                    </div>

                                    <div class="not-destaque">
                                        <div class="col-md-3 col-sm-5 col-xs-12">
                                            <!--/.init-->
                                            <?php query_posts('showposts=2&category_name=publicacao&offset=1');?>
                                            <?php if (have_posts()): while (have_posts()) : the_post();?>
                                                <div class="notici-small" >
                                                    <div class="thumbnail">
                                                        <img src="<?php echo get_option('home');?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title();?>" title="<?php the_title();?>" alt="<?php the_title();?>"  class="img-responsive img-thumbnail">
                                                        <div class="caption">
                                                            <span class="data_pub">Publicado em: <?php the_time('j M Y');?></span>
                                                            <?php
                                                                 $titulo_post =  Check::Words(get_the_title(), 5);
                                                             ?>
                                                            <h3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?= $titulo_post; ?></a></h3>
                                                        </div>
                                                    </div> 
                                                </div>   
                                            <?php endwhile; else:?>
                                            <?php endif;?> 
                                            <!--/.fim--> 
                                        </div>
                                    </div>
                                </div><!--home_list-->
                                <!-- sidebar-->
                                <?php get_sidebar(); ?>
                            </section>
                        </div>

                    </div>

                    <div class="projetos-full-widh">
                        <div class="container">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-12">
                                    <h1 
                                   class="titulo-pag" style="color: #fff; border-top: none; font-weight: bold; padding-top: 0; border-bottom: 1px solid #fff;">Últimos Projetos</h1>
                                </div>
                            </div>

                            <div class="row projetos-full">
                                <?php query_posts('showposts=3&category_name=projetos');?>
                                <?php if (have_posts()): while (have_posts()) : the_post();?>
                                    <div class="col-md-4">            
                                        <div class="thumbnail thumbnail_p">
                                            <div class="caption caption_p">
                                                <?php
                                                   $titulo_proj =  Check::Words(get_the_title(), 5);
                                                ?>
                                                <h4><?= $titulo_proj; ?></h4>
                                                 <?php
                                                   $content_proj =  Check::Words(get_the_content(), 10);
                                                 ?>
                                                <p class="desc"><?= $content_proj; ?></p>
                                                <p><a href="<?php the_Permalink()?>" class="label label-danger" rel="tooltip" title="Ver">Ver + informação</a></p>

                                                <span>Publicado em: <?php the_time('j M Y');?></span>
                                            </div>
                                            <img src="<?php echo get_option('home');?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" class="img-responsive" alt="<?php the_title();?>" >
                                        </div>
                                    </div>
                                <?php endwhile; else:?>
                             <?php endif;?> 
                            </div><!--/.projetos-full-->
                            <div class="col-md-12" style="border-bottom: 1px solid #fff; padding-top: 40px; ">
                                
                            </div>
                        </div><!--/.container-->
                    </div><!--/.projetos-full-widh-->
                </div> <!--/.home_content-->
            </section><!--/.home-area-->
        </main>
<!--footer-->
<?php get_footer(); ?>
        
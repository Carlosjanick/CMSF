<?php
	// Imagens dos posts
    add_theme_support( 'post-thumbnails' );

	//estilização da pagina de login
	function login_styles(){
		echo "<style type=\"text/css\" >
			body.login div#login h1 a {
				background-image: url(".get_bloginfo('template_directory')."/img/logo-admin.png);
				-webkit-background-size: auto;
				background-size: auto;
			}

			body.login {
			     background-image: url(".get_bloginfo('template_directory')."/img/bg.png);
		    }

		    body.login #backtoblog a, body.login #nav a{color: #fff;}

		    body.login #backtoblog a:hover, body.login #nav a:hover{color: #DC8281;}

		     body.login .message{border-left: 4px solid #DC8281;}

		     body.login #wp-submit{background: #900; border: none;}
		     body.login #wp-submit:hover{background: #DC8281;}
		</style>";
	}
 
	add_action('login_enqueue_scripts', 'login_styles');


	//pega o ficheiro que tem a funçao para logo marca automatica..
	require get_template_directory() . '/inc/marca.php'; 

	//pega o ficheiro que tem a funçao para logo marca automatica..
	require get_template_directory() . '/inc/favicon.php'; 

	//pega ficheiro para banner publicidade
    require_once(get_template_directory() . '/inc/publicidade-banner-init.php');

	// Register Menu costumizado.
    require_once(get_template_directory() . '/inc/wp-bootstrap-navwalker.php');
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'cmsf' ),
	) );


	// Registro de sidebar
	if ( function_exists('register_sidebar') )
	{
	    register_sidebar(array(
	        'name' => __( 'Facebook Like Box'),
	        'id' => 'sidebar-facebook-like-box',
	        'description' => __( 'Box para gostar da pagina do facebook relacionado ao site.'),
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );

	    register_sidebar(array(
	        'name' => __( 'Video youtube'),
	        'id' => 'sidebar-youtube-video',
	        'description' => __( 'Box para adicionar video youtube..'),
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );
	                   
	}

	//Metabox required
	 require_once(get_template_directory() . '/inc/meta-box.php');


?>



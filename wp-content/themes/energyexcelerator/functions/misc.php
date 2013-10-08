<?php 

/**
* Excerpt Functionality
* * * * * * * * * * * * */

add_action( 'init', 'ee_add_excerpts_to_pages' );
function ee_add_excerpts_to_pages() {
    
    add_post_type_support( 'page', 'excerpt' );

}

//Allow shortcodes to be used in excerpts
add_filter('the_excerpt', 'do_shortcode');


function ee_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url("<?php echo get_bloginfo( 'url' ); ?>/wp-content/uploads/2013/09/ee_logo.png");
            padding-bottom: 15px;
            background-size:123px 63px;
        }
        body.login{
        	background:#fff;
        }

        .login form{
        	-webkit-border-radius: 0px;
			border-radius: 0px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ee_login_logo' );
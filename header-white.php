<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
    	<meta charset="utf-8">
    	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    	
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"/>

        <!-- Typekit scripts need to be in the head -->
        <script src="https://use.typekit.net/gzf5vri.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
    	<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '120390075334241');
		fbq('track', 'PageView');
		</script>
		<noscript>
		<img height="1" width="1"
		src="https://www.facebook.com/tr?id=120390075334241&ev=PageView
		&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
    </head>
    <body>
    	<div class="pop-up-menu">
    		<div class="columns">
	    		<div class="column white">
		    		<ul class="mobile-nav-list">
		    			<?php wp_nav_menu( 
						array ( 
						'menu' => 'Top Menu', 
						'container' => '', 
						'container_class' => '',
						'container_id'    => '',
						'before' => '', 
						'after' => '', 
						'link_before' => '<h2>', 
						'link_after' => '</h2>', 
						'items_wrap' => '%3$s', 
						'depth' => 0, ) ); ?>
		    		</ul>
		    		<a class="social-button" target="_blank" href="https://www.facebook.com/innuendodigital/">
		    			<i class="fa fa-facebook" aria-hidden="true"></i>
		    		</a>
					<a class="social-button" target="_blank" href="https://www.instagram.com/innuendo.digital/">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
					<a class="social-button" target="_blank" href="https://www.linkedin.com/company-beta/12898157/">
						<i class="fa fa-linkedin" aria-hidden="true"></i>
					</a>
	    		</div>
    		</div>			
		</div>

    	<header class="main-header white">
    	<div class="columns is-mobile">
	    	<div class="column is-one-quarter">
		    	<div class="logo-container">
		    		<h1 class="visuallyhidden">Innuendo Digital</h1>
		    		<a href="<?php echo home_url(); ?>"><img src="<?php echo_image_url(); ?>/innuendo-logo-white.svg" alt="Innuendo Digital Logo" /></a>
		    	</div>
	    	</div>
	    	<div class="column">
	    		<nav class="main-nav">
	    			<ul>
			    		<?php wp_nav_menu( 
						array ( 
						'menu' => 'Top Menu', 
						'container' => '', 
						'container_class' => '',
						'container_id'    => '',
						'before' => '', 
						'after' => '', 
						'link_before' => '<h5>', 
						'link_after' => '</h5>', 
						'items_wrap' => '%3$s', 
						'depth' => 0, ) ); ?>

		    			<li>
		    				<a class="social-button" target="_blank" href="https://www.facebook.com/innuendodigital/">
		    					<i class="fa fa-facebook" aria-hidden="true"></i>
		    				</a>
		    			</li>
						<li>
							<a class="social-button" target="_blank" href="https://www.instagram.com/innuendo.digital/">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a class="social-button" target="_blank" href="https://www.linkedin.com/company-beta/12898157/">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</li> 

		    		</ul>
		    	</nav>
		    	<nav class="mobile-nav">
		    		<div id="mobile-nav-burger">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
		    	</nav>
	    	</div>
	    </div><!-- end columns -->
    	</header>
    	

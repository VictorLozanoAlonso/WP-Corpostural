<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blossom_Spa
 */
    /**
     * Doctype Hook
     * 
     * @hooked blossom_spa_doctype
    */
    do_action( 'blossom_spa_doctype' );
?>
<head itemscope itemtype="http://schema.org/WebSite">
	<?php 
    /**
     * Before wp_head
     * 
     * @hooked blossom_spa_head
    */
    do_action( 'blossom_spa_before_wp_head' );
    wp_head(); ?>

	<?php if (is_page('Madrid - Barrio Chamberí')){?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "HealthAndBeautyBusiness",
	"image": "https://www.corpostural.com/wp-content/uploads/Corpostural-logo.png",
	"@id": "https://www.corpostural.com/madrid-retiro/",
	"name": "Clínica de Fisioterapia Corpostural",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "Amado Nervo 3",
		"addressLocality": "Madrid",
		"addressRegion": "MADRID",
		"postalCode": "28007"
		},
	    "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "4.9",
          "bestRating": "5"
        	},	
		"author": {
          "@type": "Person",
          "name": "Victor Lozano"
       		 }
     	 },
	  	"geo": {
		"@type": "GeoCoordinates",
		"latitude": "40.4102514",
		"longitude": "-3.67835"
		},
		"url": "https://www.corpostural.com/madrid-retiro/",
		"telePhone": "687352092",
		"email": "info@corpostural.com",
	"aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "57"
  	},
	"paymentAccepted": [ "cash", "credit card" ],
	"openingHours": "Mo,Tu,We,Th,Fr,Sa 09:00-21:00",
	"openingHoursSpecification": [ {
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday"
		],
		"opens": "09:00",
		"closes": "21:00"
	} ],

	"priceRange":"$$"
}
</script>
				<?php 
                }else{ ?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "HealthAndBeautyBusiness",
	"name": "Clínica de Fisioterapia Corpostural",
	"@id": "https://www.corpostural.com/",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "Camino de Leganes 20, Bajo A",
		"addressLocality": "Madrid",
		"addressRegion": "MADRID",
		"postalCode": "28021"
	},
		"review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "4.9",
          "bestRating": "5"
        	},	
		"author": {
          "@type": "Person",
          "name": "Victor Lozano"
       		 }
     	 },
	"image": "https://www.corpostural.com/wp-content/uploads/Corpostural-logo.png",
	"email": "info@corpostural.com",
	"aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "57"
  	},
	"telePhone": "687352092",
	"url": "https://www.corpostural.com",
	"paymentAccepted": [ "cash", "credit card" ],
	"openingHours": "Mo,Tu,We,Th,Fr,Sa 09:00-21:00",
	"openingHoursSpecification": [ {
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday"
		],
		"opens": "09:00",
		"closes": "21:00"
	} ],
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": "40.3439078",
		"longitude": "-3.7142666"
	},
	"priceRange":"$$"
}
</script>
                <?php } ?>             
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<?php

    wp_body_open();
    
    /**
     * Before Header
     * 
     * @hooked blossom_spa_page_start - 20 
    */
    do_action( 'blossom_spa_before_header' ); 
    /**
     * Header
     *
     * @hooked blossom_spa_responsive_nav - 10 
     * @hooked blossom_spa_header - 20     
    */?>
<header id="masthead" class="site-header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container">
            <div class="header-main">
				<div class="site-branding">
        		    <?php the_custom_logo(); ?>
        		</div>  
                <?php blossom_spa_header_contact(); ?>
            </div><!-- .header-main -->
			<div class="site-title-wrap">
			<?php if( is_front_page() ){ ?>
			<h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php 
                }else{ ?>
				<?php if (is_page('Madrid - Barrio Chamberí')){?><p>Tu clínica de Fisioterapia en el barrio de Chamberí</p>
				<?php 
                }else{ ?>
                    <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                <?php } } ?>
				 </div>
            <div class="nav-wrap">
                <?php blossom_spa_primary_nagivation(); ?>
                <?php if( blossom_spa_social_links( false ) || blossom_spa_header_search( false ) ) : ?>
                    <div class="nav-right">
                        <?php blossom_spa_social_links(); ?>
                        <?php blossom_spa_header_search(); ?>
                    </div><!-- .nav-right -->   
                <?php endif; ?>
            </div><!-- .nav-wrap -->
        </div><!-- .container -->    
	<?php if( is_front_page() ){ ?>
	<div class="imagen">
	</div>
	<?php }  ?>
    </header>
	<?php if( is_front_page() ){ ?>
			<?php }else{ ?>
	            <header class="page-header">
                <div class="container">
        			<?php                                                       
                        if( is_search() ){ 
                            echo '<h1 class="page-title">' . esc_html__( 'SEARCH RESULTS FOR:', 'blossom-spa' ) . '</h1>';
                            get_search_form();
                        }
							if( is_singular() ){
                            blossom_spa_category();
                            the_title( '<h1 class="page-title">', '</h1>' );
                            if( 'post' === get_post_type() ){
                                echo '<div class="entry-meta">';
                                blossom_spa_posted_by();
                                blossom_spa_posted_on();
                                blossom_spa_comment_count();
                                echo '</div>';
                            }
                        }
                        if( is_404() ) {
                            echo '<h1 class="page-title">' . esc_html__( 'Uh-Oh...','blossom-spa' ) .'</h1>';
                        }
                        blossom_spa_breadcrumb();
                    ?>
                </div>
    		</header><!-- .page-header -->
	<?php } ?>
            <div class="container">
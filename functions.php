<?php
add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles' );
function theme_slug_enqueue_styles() {
  $parent_style = 'parent-style'; // Reemplazar "parebt" por el nombre de la carpeta del tema.
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
  get_stylesheet_directory_uri() . '/style.css',
  array( $parent_style ),
  wp_get_theme()->get('Version')
);
}
?>
<?php
function blossom_spa_header(){ ?>
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
                    <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                <?php }  ?>
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
    </header>
<?php }?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-theme.min.css">

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jqueryui/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/pederan/jquery.imageScroll.min.js"></script>


</head>
<body <?php body_class(); ?>>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar transparent navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			  
              <div class="hidden-xs">
				<?php if(get_field('logo', 'option')){?>
					<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('logo', 'option');?>" height="80px"></a>
				<?php }?>				
			  </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
				<?php wp_nav_menu( array('menu' => 'header' ,'menu_class' => 'nav navbar-nav navbar-right')); ?>
            </div>
          </div>
        </nav>

      </div>
    </div>

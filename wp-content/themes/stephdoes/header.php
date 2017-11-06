<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Stephanie Does</title>
		<?php wp_head(); ?>
	</head>

	<?php 

		if (is_front_page() ):
			$stephdoes_classes = array('stephdoes-class', 'my-class');
		else:
			$stephdoes_classes = array('no-stephdoes-class');
		endif; 
	?>

	<body <?php body_class( $stephdoes_classes ); ?>>

		<div class="container">

		<div class="row">

			<div class="col-xs-12">
				<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
			</div>
			
		</div>

		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
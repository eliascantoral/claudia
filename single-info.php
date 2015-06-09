<?php get_header();?>
	<div class="container marketing">
		<?php $paralax = get_field("paralax");
			for($i=0;$i<sizeof($paralax);$i++){
				?>
					<div class="img-holder" data-image="<?php echo $paralax[$i][imagen];?>" data-width="1600" data-height="900" data-extra-height="50"></div>
					<br>
					<section>
						<?php 
							//print_array($paralax[$i][contenido]);	
							$elementos = sizeof($paralax[$i][contenido]);
							$row =0;
							switch($elementos){
								case 1: $col = array("col-md-10 col-md-offset-1");$limite =array(1);break;
								case 2: $col = array("col-md-6");$limite =array(2);break;
								case 3: $col = array("col-md-4");$limite =array(3);break;
								case 4: $col = array("col-md-10 col-md-offset-2","col-md-4");$limite =array(1,3);break;
								case 5: $col = array("col-md-6","col-md-4");$limite =array(2,3);break;
								case 6: $col = array("col-md-4","col-md-4");$limite =array(3,3);break;
							}
							$a=0;
							for($e=0;$e<sizeof($paralax[$i][contenido]);$e++){?>
								<?php if($a==0){ ?> <div class="row"> <?php }?>
									<div class="<?php echo $col[$row];?>">
										<div class="media">
										  <div class="media-left">											
											  <img class="media-object" src="<?php echo $paralax[$i][contenido][$e][contenido_imagen];?>" alt="Imagen" width="200px">											
										  </div>
										  <div class="media-body">
											<h4 class="media-heading"></h4>
											<?php echo $paralax[$i][contenido][$e][contenido_info];?>
										  </div>
										</div>								
									</div>	
							<?php $a++ ;if($a==$limite[$row]){$a=0;$row++;?></div><?php } ?>
						<?php }	?>
							
					</section>	
					<br>
					<br><br>
				<?php
			}
		?>
	</div>

<?php get_footer();?>

    <script>
        $('.img-holder').imageScroll({
            image: null,
            imageAttribute: 'image',
            container: $('body'),
            speed: 0.2,
            coverRatio: 0.75,
            holderClass: 'imageHolder',
            holderMinHeight: 200,
            extraHeight: 0,
            mediaWidth: 1600,
            mediaHeight: 900,
            parallax: true,
            touch: false
        });
    </script>
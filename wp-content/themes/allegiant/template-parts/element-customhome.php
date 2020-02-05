<div class="cont-row">


<?php

	
	if ( is_front_page() ) {
		$page = get_page_by_title( 'home' );
		$categories = get_the_category($page->ID);	
	} else {
		$categories = get_the_category();	
	}
	
	$k=1;
	foreach($categories as $categoryVal) {
		$mySlide = "mySlides_".$k;
?> 		
<?php
	    $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
	    $args = array(
	        'post_type' => 'post',
	        'post_status' => 'publish',
	        'cat' => $categoryVal->cat_ID,
	        //'posts_per_page' => 5,
	        'paged' => $paged,
	    );
	    $arr_posts = new WP_Query( $args );			 
?>
<?php   
		$posts = $arr_posts->get_posts();
		$count = count($posts);
	    if ( $arr_posts->have_posts() ){
	    ?>	
		    <div class="width-col">
				<div class="image-wrapper">
					<div class="img-box">
					    <?php
					    	$showImageClass = $mySlide . " show_homepage_img";
					    	$i = 1;
					        while ( $arr_posts->have_posts() ){ 
					        	
						        	$displayClass = ($i == 1) ? 'show_homepage_img' : 'hide_homepage_img';				        	
						        	$arr_posts->the_post();
						        	$img_attribs = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); 
						        	if ( has_post_thumbnail() && $img_attribs) {
				                    	$imagePath = the_post_thumbnail('post-thumbnail', ['class' => $mySlide . " " .$displayClass]);
						        	} 					            
						        $i++;
						    }
						?>
    					<div class="img-control">
							<a href="javascript:;" class="sl" onclick="minusDivs(-1, '<?php echo $mySlide;?>')"></a>
	                		<a href="javascript:;" class="sr"onclick="plusDivs(1, '<?php echo $mySlide;?>', 
	                		'<?php echo $mySlide;?>')"></a>
	                	</div>

					</div>
					
					<div class="img-detail">
						<h5><?php echo $categoryVal->name; ?></h5>
						<span class="paging_<?php echo $mySlide;?>">1/<?php echo $count;?></span>
					</div>



				</div>
			</div>
<?php
	}
	$k++;
	}
?>	      
</div>



<?php /*
<div class="cont-row">
	<div class="width-col">
		<div class="image-wrapper">
			<div class="img-box">
				<img alt="" class="mySlides_1" src="<?php bloginfo('template_url'); ?>/images/01.jpg" style="display: block">
				<img alt="" class="mySlides_1" src="<?php bloginfo('template_url'); ?>/images/02.jpg" style="display: none">
				<img alt="" class="mySlides_1" src="<?php bloginfo('template_url'); ?>/images/03.jpg" style="display: none">
				<div class="img-control">
					<a href="javascript:;" class="sl" onclick="plusDivs(-1, 'mySlides_1')"></a>
                	<a href="javascript:;" class="sr"onclick="plusDivs(1, 'mySlides_1')"></a>
                </div>
			</div>
			<div class="img-detail">
				<h5>Title</h5>
				<span>1/5</span>
			</div>
		</div>
	</div>
	<div class="width-col">
		<div class="image-wrapper">
			<div class="img-box">
				<img alt="" class="mySlides_2" src="<?php bloginfo('template_url'); ?>/images/02.jpg" style="display: block">
				<img alt="" class="mySlides_2" src="<?php bloginfo('template_url'); ?>/images/03.jpg" style="display: none">
				<img alt="" class="mySlides_2" src="<?php bloginfo('template_url'); ?>/images/01.jpg" style="display: none">
				<div class="img-control">
					<a href="javascript:;" class="sl" onclick="plusDivs(-1, 'mySlides_2')"></a>
                	<a href="javascript:;" class="sr"onclick="plusDivs(1, 'mySlides_2')"></a>
                </div>
			</div>
			<div class="img-detail">
				<h5>Title</h5>
				<span>1/5</span>
			</div>
		</div>
	</div>
	<div class="width-col">
		<div class="image-wrapper">
			<div class="img-box">
				<img alt="" class="mySlides_3" src="<?php bloginfo('template_url'); ?>/images/03.jpg" style="display: block">
				<img alt="" class="mySlides_3" src="<?php bloginfo('template_url'); ?>/images/02.jpg" style="display: none">
				<img alt="" class="mySlides_3" src="<?php bloginfo('template_url'); ?>/images/01.jpg" style="display: none">
				<div class="img-control">
					<a href="javascript:;" class="sl" onclick="plusDivs(-1, 'mySlides_3')"></a>
                	<a href="javascript:;" class="sr"onclick="plusDivs(1, 'mySlides_3')"></a>
                </div>
			</div>
			<div class="img-detail">
				<h5>Title</h5>
				<span>1/5</span>
			</div>
		</div>
	</div>
	<div class="width-col">
		<div class="image-wrapper">
			<div class="img-box">
				<img alt="" class="mySlides_4" src="<?php bloginfo('template_url'); ?>/images/03.jpg" style="display: block">
				<img alt="" class="mySlides_44" src="<?php bloginfo('template_url'); ?>/images/02.jpg" style="display: none">
				<img alt="" class="mySlides_4" src="<?php bloginfo('template_url'); ?>/images/01.jpg" style="display: none">
				<div class="img-control">
					<a href="javascript:;" class="sl" onclick="plusDivs(-1, 'mySlides_4')"></a>
                	<a href="javascript:;" class="sr"onclick="plusDivs(1, 'mySlides_4')"></a>
                </div>
			</div>
			<div class="img-detail">
				<h5>Title</h5>
				<span>1/5</span>
			</div>
		</div>
	</div>
</div>

*/ ?>
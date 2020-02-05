<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

    <?php
	    $categories = get_categories();
    	foreach($categories as $categoryVal) {
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
		 

		    if ( $arr_posts->have_posts() ) :
		 
		    	print_r($categoryVal->cat_ID); 
		    	$i = 1;
		        while ( $arr_posts->have_posts() ) :

		        	echo '<br/>i => ' . $i . '<br/>';

		        	$arr_posts->the_post();
		            ?>
		            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		                <?php
		                if ( has_post_thumbnail() ) :
		                    the_post_thumbnail();
		                endif;
		                ?>
		                <header class="entry-header">
		                    <h1 class="entry-title"><?php echo $categoryVal->name; ?></h1>
		                </header>
		                
		            </article>
		            <?php
		            $i++;
		        endwhile;
		        
		    endif;
		?>
	<?php } ?>

<?php 
  

  
  foreach ($categories as $key => $categoryValue) {

  		$termId = $categoryValue->term_id;
  		$title = $categoryValue->name;
  		$cp = new WP_Query(
	      array (
	        'cat' => $termId,
	        'fields' => 'ids',
	        'ignore_sticky_posts' => true
	      )
	    );
	    // var_dump($cp->posts); // debug
	    if ($cp->have_posts()) {

	    	

		      $attach = new WP_Query(
		        array (
		          'post_parent__in' => $cp->posts,
		          'post_type' => 'attachment',
		          'post_status' => 'inherit',
		          'ignore_sticky_posts' => true,
		          'posts_per_page' => 1
		        )
		      );

		      if ($attach->have_posts()) {

		      	//print_r($attach);
		      	
		      	//echo $image = "<img src='".$attach->posts[0]->guid."' width='100px' height='100px'>";
		      	//echo '<br/>';
		        //$term->image = wp_get_attachment_image($attach->posts[0]->ID);
		      } else {
		        $image = '';
		      }

	    }

  }

	
    

  exit;

  // foreach($categories as $category) {
	 //   echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
  // }	
  exit();	  
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php
	get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->

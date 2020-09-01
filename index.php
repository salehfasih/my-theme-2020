<?php 

get_header();
?>
<section class="content-area" id="primary" >
 -->
<main id="main" class="site-main" style="background-color:orange;">
<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				the_content();
				get_template_part( 'inc/content/content' );
			}

			// Previous/next page navigation.
			// twentynineteen_the_posts_navigation();

		} 
		?>

<section>
<header>
<h2>Official News</h2>

</header>
<article>
<header>
<h2>Breaking News</h2>
</header>
<p class="inline-tex-box">Left</p><p class="inline-tex-box">Right</p>
<?php 
add_shortcode("testimonials-list","testimonials_list");
add_theme_support( 'post-thumbnails' );

function testimonials_list(){
    $args = array(
        // 'posts_per_page' => -1,
        'post_type' => 'testimonials',
        'order' => 'ASC',
    ); 
    $loop = new WP_Query($args); // The Loop
   
    $html .='<div id="testimonial-slider" class="testimonial">';
						$html .='<div class="arrow">';
					$html .='<i class="fa fa-arrow-right" aria-hidden="true" >'.'</i>';
					$html .='<i class="fa fa-arrow-left" aria-hidden="true">'.'</i>';
				
					$html .= '</div>';
	
        while ( $loop->have_posts() ) : $loop->the_post();
                { 
                    $post_id = get_the_ID();
					$html .='<div class="slider slider-for" >';

	
						$html .= '<div class="testimonial-slider-section">';
					
						$html .= '<center class="testimonial-thumble">'.get_the_post_thumbnail().' </center>';
                        $html .= '<center>'.get_the_content().'</center>';
                        $html .= '<center class="testimonial-tilte">'.get_the_title().' </center>';
						$html .= '<center class="testimonial-">'.get_field("address").' </center>';
						
						$html .= '</div>';
						
				     	
					   $html .='</div>';
					
                    
                } 
        endwhile;
   

    // $html .= '</section>';
    return $html;
}
?>

</article>

</section>

</main> 

</section> 


<?php 
get_sidebar();

get_footer();


?>

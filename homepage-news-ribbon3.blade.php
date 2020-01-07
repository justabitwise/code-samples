<?php
$show_news = get_field('show_news');
$ribbon_featured = get_field('ribbon_featured_post');
if (isset($show_news) &&  get_field('show_news') == 'yes' ): 
	$post = $ribbon_featured;
	setup_postdata($post);
	$url = get_permalink();
	if( get_field('external_or_internal_link', 5) == 'external' ) {
		$url = get_field('external_link_url', 5);
		$newTab = 'target="_blank"';
	}
	
?>

<div class="news-ribbon">
	<h3>Latest news from Juvo:</h3>
	<a class="ribbon-title" href="<?php echo $url; ?>" <?php echo $newTab; ?> > <?php the_field('ribbon-title-content', 5); ?> </a>
    <div class="ribbon-cta"><a style="color:#fff;" href="<?php echo $url; ?>" <?php echo $newTab; ?> ><?php the_field('ribbon-cta-content', 5); ?></a></div>
    <a class="ribbon-cta-arrow" href="<?php echo $url; ?>" <?php echo $newTab; ?>></a>
</div><!--news-ribbon -->

<?php 
	wp_reset_postdata(); 
	endif;
?>
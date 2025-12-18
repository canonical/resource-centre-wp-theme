<div class="article-meta">
	<ul class="no-bullets">
<?php
$category = get_the_category();
if (is_array($category) && !empty($category) && isset($category[0]) && is_object($category[0])) {
    $cat = $category[0];
    $slug = property_exists($cat, 'slug') ? $cat->slug : '';
    $name = property_exists($cat, 'name') ? $cat->name : '';
    if ($slug && $name) {
        echo '<li><a href="/'.$slug.'">'.$name.'</a></li>';
    }
}
?>

		<?php
// Get terms for post
$terms = get_the_terms( $post->ID , 'group' );
if ($terms) :
	foreach( $terms as $term ) :
		echo '<li><a href="/'.$term->slug. '"> '.$term->name.'</a>&nbsp;</li>';
	unset($term);
endforeach;
endif;
?>

		<?php
// Get terms for post
$terms = get_the_terms( $post->ID , 'download-type' );
if ($terms) :
	foreach( $terms as $term ) :
		echo '<li><a href="/category/downloads/?download-type='.$term->slug. '"> '.$term->name.'</a>&nbsp;</li>';
	unset($term);
endforeach;
endif;
?>
	</ul>
<!--<time datetime="<?php the_time('Y-m-d') ?>">
		<?php //the_time('j') ?><?php the_time(' F Y') ?>
</time> -->	
</div><!-- /.article-meta -->

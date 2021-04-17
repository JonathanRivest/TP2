<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<article>
<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail( 'thumbnail'); ?></a>
<div class="galerie_info">
<p><?php the_title(); ?></p>
<p><?php the_author(); ?></p>
</div>
</article> 

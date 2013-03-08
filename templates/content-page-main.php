<?php /* 
<div class="section-header">
<h3>Latest Blog</h3>
</div>
*/ ?>

<!-- LOOK FOR BLOG POSTS --> 
<?php query_posts('cat=4&posts_per_page=1'); ?>
<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<div class="latest-post rounded-corners">
 <!-- Display the Title as a link to the Post's permalink. -->
 <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

 <!-- Display the Post's Content in a div box. -->
 <div class="entry">
   <?php the_content(); ?>
 </div>

 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php wp_reset_query() ?>
</div>


<div class="section-header">
<h4>Projects</h4>
</div>

<!-- Start row-of-3 class -->
<div class="row-of-3">

<!-- Look for PROJECT pages --> 
<?php
  $args=array(
  'posts_per_page' =>'3',
  'post_parent' =>'93',
  'orderby' =>'modified',
  'post_type' =>'page',
   );
   $page_query = new WP_Query($args); ?>

<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ($page_query->have_posts()) : $page_query->the_post(); ?>
 
<div class="row-post rounded-corners">
 <!-- Display the Title as a link to the Post's permalink. -->
 <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

 <!-- Display the Post's Content in a div box. -->
 <div class="row-entry">
   <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
   <a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a>
 </div>
</div>


 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php wp_reset_query() ?>

<!-- Stop row-of-three -->
</div> 

<div class="section-header">
<h4>Other Things I Do</h4>
</div>

<!-- Start row-of-3 class -->
<div class="row-of-3">
<!-- Look for OTHER THINGS I DO pages --> 
<?php
  $args=array(
  'posts_per_page' =>'3',
  'post_parent' =>'101',
  'orderby' =>'modified',
  'post_type' =>'page',
   );
   $page_query = new WP_Query($args); ?>

<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ($page_query->have_posts()) : $page_query->the_post(); ?>
 
<div class="row-post rounded-corners">
 <!-- Display the Title as a link to the Post's permalink. -->
 <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

 <!-- Display the Post's Content in a div box. -->
 <div class="row-entry">
   <?php the_post_thumbnail(); ?>
   <?php the_excerpt(); ?>
 </div>
</div>


 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php wp_reset_query() ?>

<!-- Stop row-of-three -->
</div> 


<!-- The Normal Page loop -->
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>

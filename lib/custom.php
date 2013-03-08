<?php

// Custom functions


// Function to automatically generate categories for each Project Page
 $args=array(
  'post_parent' =>'93',
  'post_type' =>'page',
   );
   $page_query = new WP_Query($args);
while ($page_query->have_posts()) : $page_query->the_post();
$cat_name = get_the_title($post);
$arg = array('description' => " ", 'parent' => "7");
$new_cat_id = wp_insert_term( $cat_name , "category", $arg);
endwhile;


// Function to automatically generate categories for each Other Things Page
 $args=array(
  'post_parent' =>'101',
  'post_type' =>'page',
   );
   $page_query = new WP_Query($args);
while ($page_query->have_posts()) : $page_query->the_post();
$cat_name = get_the_title($post);
$arg = array('description' => " ", 'parent' => "8");
$new_cat_id = wp_insert_term( $cat_name , "category", $arg);
endwhile;
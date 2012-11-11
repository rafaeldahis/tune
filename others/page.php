<?php get_header(); ?>

<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <p class="head-one">Sample Page</p>
            <p class="head-two">Lorem ipsum dolor amet conse semper ctetur adipig NOW!</p>
         </div>
      </div>
   </div>
</div>

<div class="container">
   <div class="blog">
      <div class="row">
         <div class="span8">
            <div class="posts">
               <?php if(have_posts()) : ?>
               <?php while(have_posts()) : the_post(); ?>
               <div class="entry">
                 <h2><?php the_title(); ?></h2>
                 <?php the_content(); ?>
               </div>
               <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>

<?php get_sidebar(); ?> 

<?php get_footer(); ?>
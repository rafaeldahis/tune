<?php get_header(); ?>

<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <p class="head-one">Welcome to my Blog</p>
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
               <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
               <?php /* If this is a category archive */ if (is_category()) { ?>
               <h3>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; category</h3>
               <?php /* If this is a tag archive */ } elseif( function_exists('is_tag') ) { if(is_tag()){ ?>
               <h3>Posts tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>
               <?php /* If this is a daily archive */} } elseif (is_day()) { ?>
               <h3>Archive for <?php the_time('F jS, Y'); ?></h3>
               <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
               <h3>Archive for <?php the_time('F, Y'); ?></h3>
               <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
               <h3>Archive for <?php the_time('Y'); ?></h3>
               <?php /* If this is an author archive */ } elseif (is_author()) { ?>
               <h3>Author archive</h3>
               <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
               <h3>Blog archives</h3>
               <?php } ?>
               <?php while(have_posts()) : the_post(); ?>
               <div class="entry">
                 <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                 <p class="meta"><i class="icon-calendar"></i> <?php the_time('j F Y'); ?> - <i class="icon-folder-open"></i> <?php the_category(', ') ?> - <i class="icon-user"></i> <?php  the_author(); ?> - <i class="icon-comment"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
                 <?php the_excerpt(); ?>
   <div class="readmore"><a href="<?php the_permalink() ?>">Read More &raquo;</a></div>
   <div class="clearfix"></div>
               </div>
               <?php endwhile; ?>
               <div class="navigation">
                 <div class="pull-left"><?php next_posts_link('&laquo; Previous Entries') ?></div>
                 <div class="pull-right"><?php previous_posts_link('Next Entries &raquo;') ?></div>
                 <div class="clearfix"></div>
               </div>
               <?php else : ?>
                <div class="entry">
                  <h2>No Posts Found</h2>
                  <p>Sorry, there can't find any posts. Check back later.</p>
                </div> 
               <?php endif; ?>
             </div>
         </div>

<?php get_sidebar(); ?> 

<?php get_footer(); ?>
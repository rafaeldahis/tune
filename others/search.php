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
               <h3>Search results for &#8216;<?php the_search_query(); ?>&#8217;</h3>
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
                  <h2>No search results</h2>
                  <p>We did not find any posts containing the string &#8216;<?php the_search_query(); ?>&#8217;.</p>
                </div>               
               <?php endif; ?>
             </div>
         </div>

<?php get_sidebar(); ?> 

<?php get_footer(); ?>
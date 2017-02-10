<?php get_header(); ?>
    
<section id="slider-wrap">
    <div class="row-container">
        <div class="limit-width">
             <?php echo do_shortcode('[rev_slider alias="ito_slider"]'); ?>
        </div>
    </div>
</section>
    
<section id="icon_parts">
    <div class="row-container">
       <div class="limit-width">
            <?php get_template_part('template_parts/icon_list'); ?>
        <div class="down-btn">
            <a href="#vedio-block"><i class="fa fa-arrow-circle-o-down"></i></a>
        </div>
       </div>
    </div>
</section>
   
<section id="vedio-block">
   
    <?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>

       <?php the_content(); ?>

    <?php endwhile;endif; ?>
  
</section>
 
<seciton id="featured_block">
    <div class="row-container">
        <div class="limit-width">
            <?php get_template_part('template_parts/featured_blocks'); ?>
        </div>
    </div>
</seciton>

<seciton id="contact-form">  
 <div class="row-container">
    <div class="limit-width">
        <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
     </div>
    </div>
</seciton>

<?php get_footer(); ?>
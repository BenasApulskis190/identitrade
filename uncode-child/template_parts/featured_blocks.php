<?php 

    $blockArr = array(
        'post_type' => 'featured_blocks',
    );

    $fullBLockQuery = new WP_Query($blockArr);

?>


<?php if($fullBLockQuery->have_posts() ) : while($fullBLockQuery->have_posts() ) : $fullBLockQuery->the_post(); ?>
   
   <?php 

    $layout = get_field('layout'); 
    $btnText = get_field('button_text');


   ?>
   


<?php if($layout == 'left'){ ?>
    <div class="clear"></div>
        
    <div class="featured-block-wrap">
        <div class="block-img">
            <?php if(has_post_thumbnail() ) : ?>
               
                <?php the_post_thumbnail(); ?>
                
            <?php endif; ?>
        </div>

        <div class="block-content">

            <div class="featured-title">
                <?php the_title(); ?>
            </div>

            <div class="featured-content">
                <?php the_content(); ?>
            </div>

            <div class="featured-btn">
                <a href="#"><?php echo $btnText; ?></a>
            </div>

        </div>
    </div>

    <div class="clear"></div>

<?php }else if($layout == 'right'){ ?>
     <div class="clear"></div>

    <div class="featured-block-wrap">

        <div class="block-content content-right">

            <div class="featured-title">
                <?php the_title(); ?>
            </div>

            <div class="featured-content">
                <?php the_content(); ?>
            </div>

            <div class="featured-btn">
                <a href="#"><?php echo $btnText; ?></a>
            </div>

        </div>

        <div class="block-img img-right">
            <?php if(has_post_thumbnail() ) : ?>
               
                <?php the_post_thumbnail(); ?>
                
            <?php endif; ?>
        </div>
    </div>
    
    <div class="clear"></div>

<?php  }else if($layout == 'two'){  ?>

    
    <div class="two-col">
         <?php if(has_post_thumbnail() ) : ?>
           
            <div class="two-col-img-wrap">
              
               <div class="inner-conntent-wrap">
                 
                 <div class="featured-title">
                    <?php the_title(); ?>
                 </div>
                 
                  <div class="featured-content">
                     <?php the_content(); ?>
                  </div>
                  
                  <div class="featured-btn">
                      <a href="#"><?php echo $btnText; ?></a>
                  </div>
               </div>
               
                <?php the_post_thumbnail(); ?>
            </div>
            
         <?php endif; ?>
    </div>
   

    
<?php } ?>
   
<?php endwhile;endif; ?>

    
<?php wp_reset_query(); ?>


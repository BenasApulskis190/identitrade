<?php 

    $iconArr = array(
        'post_type' => 'icon_list',
        
    );

    $iconQuery = new WP_Query($iconArr);

?>

<div class="fietured-img-wrapper">

<?php if($iconQuery->have_posts() ) : while($iconQuery->have_posts() ) : $iconQuery->the_post(); ?>
    
    <?php $itemImg = get_field('icon'); ?>

    <div class="icon-item">
       
       <?php if($itemImg) : ?>
       
        <div class="icon-img-wrap">
            <img src="<?php echo $itemImg['url']; ?>" alt="<?php echo $itemImg['alt']; ?>">
        </div>
        
        <?php endif; ?>
        
        <h3 class="item-text">
            <?php the_title(); ?>
        </h3>
    </div>    
   
<?php endwhile;endif; ?>

<?php wp_reset_query(); ?>
</div>
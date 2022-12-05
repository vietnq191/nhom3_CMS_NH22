<?php
$args = array(
    'category_name' => block_value('category'),
    'posts_per_page' => 4,
);
$category = new WP_query($args);
?>
<div class="row-fluid  div-full-page-outer">
    <div class="span16 div-full-page">
        <div class="ty-wysiwyg-content">
            <div class="wrap-key-points">
                <div class="top-key-points"> <span><?php echo block_value('category') ?></span> </div>
                <div class="bottom-key-points">
                    <?php                
                            if ($category->have_posts()) :
                            while ($category->have_posts()) : $category->the_post();
                            ?>
                            <div class="item"> <a href="<?php the_permalink();?>">
                                    <div class="wrap-img"><?php the_post_thumbnail(); ?> </div>
                                    <div class="wrap-decs"> <span class="title"><?php the_title(); ?></span>
                                        <hr> <span class="description"> <?php the_excerpt(); ?> </span>
                                    </div>
                                </a> </div>
                    <?php

                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
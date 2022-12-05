<?php
$args = array(
    'category_name' => block_value('category'),
    'posts_per_page' => 2,
);
$category = new WP_query($args);
?>

    <div class="row-fluid ">
        <div class="span16 home-blog-news ">
            <div class="ty-wysiwyg-content">
                <div class="main-title title-home-block-news">
                    <h2><a href="javascript:void(0)"><?php echo block_value('category') ?></a></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid ">
        <div class="span16 ">
            <div class="row-fluid ">
                <div class="span7 ">
                    <div class="mp-flexible-banner banner-flexible-column-1">
                        <div class="banners banners-carousel banners-load-owl-carousel">
                            <div class="ty-banner__image-item" banner-default="banner-2951"> <a class="banner__link" href="/tin-tuc/" target="_blank">
                                    <img class="ty-pict ty-banner__image img-lazyload" id="det_img_1414236898" data-src="<?php block_field('image') ?>" src="<?php block_field('image') ?>" alt="Thông tin giá vàng hôm nay" title="Thông tin giá vàng hôm nay" style="opacity: 0;"> </a>
                                <!-- <php dynamic_sidebar('banner-widget'); ?> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span9 home-blog-news news-2">
                    <div class="ty-wysiwyg-content">
                        <div class="flexible-blog flexible-blog-outer hot-news">
                            <ul class="flexible-blog-inner">
                                <?php

                                if ($category->have_posts()) :
                                    while ($category->have_posts()) : $category->the_post();

                                ?>
                                        <li class="item-new color-0"> <a class="center-img ty-float-left" aria-label="article" target="_blank" href="<?php the_permalink();?>">
                                                <img class="img-lazyload" src=<?php the_post_thumbnail(); ?> </a>
                                                <div class="info-new ty-float-left"> <a href=<?php the_permalink(); ?> target="_blank">
                                                        <h2 class="title-blog truncate-blog-title blog-hot"> <?php the_title(); ?>
                                                        </h2>
                                                        <div class="short-description truncate-blog-short-title blog-hot">
                                                            <?php the_excerpt(); ?> </div>
                                                        <p class="read-more"><span>Xem thêm</span></p>
                                                    </a> </div>
                                        </li>

                                <?php

                                    endwhile;
                                endif; ?>
                            </ul>

                            <div class="link-view-all ty-float-right"> <a href="/tin-tuc/" target="_blank">Xem tất cả</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
//Variables
$number_sliders = block_value('number-sliders');
$category = block_value('category');
?>
<div class=" content-grid tygh-content clearfix slider">
            <div class="row-fluid ">
                <div class="span16 div-full-page banner-main-outer">
                    <div class="ty-wysiwyg-content">
                        <h1 class="seo-name hidden">CÔNG TY CỔ PHẦN VÀNG BẠC ĐÁ QUÝ PHÚ NHUẬN</h1>
                    </div>
                    <div class=" mp-controls-right">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                               <?php for ($i = 1 ; $i <= $number_sliders ; $i++){ 
                               ?>
                                
                                <li data-target="#myCarousel" data-slide-to="<?php $i ?>" class="<?php if($i==0){echo 'active'; $i++ ;} ?>" ></li>
                                <?php } ?>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php
								$slider = new WP_Query(array(
								    'post_type' => 'slider', 
								    'posts_per_page' => $number_sliders,
								    'category_name' => $category,
								    'orderby' => 'date',
                                    'order'   => 'DESC',
								    ));
								$i = 1;
								while ($slider->have_posts()) {
									$slider->the_post();
                                    
								?>
                                <div class="item <?php if ($i == 1) {
															echo 'active';
															$i++;
														} ?>">
                                    <a href='<?php the_permalink();?>'><?php the_post_thumbnail('full', array('style' => 'width:100%;height: 450px', 'class' => 'ty-pict ty-banner__image lazyOwl cm-image')) ?></a>
                                    
                                    <!-- <img src="la.jpg" alt="Los Angeles" style="width:100%;"> -->
                                </div>
                                <?php } ?>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next" >
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>

const something = document.querySelector(".header-slider");
const parent = something.parentElement;

// Get the `navbar` inside it and move it in front of it
const slider = document.querySelector(".slider");
parent.insertBefore(slider, something);
</script>
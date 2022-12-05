<div class="container">
	<div class="row">
		<div class="col-xs-11 col-md-10 col-centered">

			<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500" style="padding-top: 20px">
				<div class="carousel-inner" style="text-align: center;">
				    <?php
                        $args = array(
                            'taxonomy' => 'product_cat',
                            'orderby'    => 'date',
                            'order'      => 'desc',
                        );
                        $all_categories = get_categories( $args );
                        $count = 1;
                        foreach ($all_categories as $cat) {
                            $category_thumbnail = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
                            $image = wp_get_attachment_url($category_thumbnail);
                            if(!$image)
                            {
                                continue;
                            }
                    ?>
					<div class="item <?php if($count == 1) echo "active" ?>">
						<div class="carousel-col">
							<div class="img-responsive">
							    <div class="owl-item" style="width: 180px;">
							        <div class="item"> 
							        <div class="item-inner"> 
							        <a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>"> 
							        <span class="img"> <img class="img-lazyload circular--square" src="<?php echo $image ?>" data-src="" alt="Trang sức vàng" style="opacity: 1;"> </span> 
							   <br> <span class="title"><?php echo $cat->name ?></span> </a> </div> </div></div>
							</div>
						</div>
					</div>
					<?php 
					        $count++;
					    } 
					?>
				</div>

				<!-- Controls -->
				<div class="left carousel-control" style="margin-right: 40px; margin-left: -40px;  width: 8%; width: 0px;">
					<a href="#carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left Secondary" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<div class=" right carousel-control" style=" margin-right: -20px; margin-left: 32px;  width: 8%; width: 0px;">
					<a href="#carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right Secondary" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>

<style>

.circular--square { border-radius: 50%; background-color: #f7f7f7; max-width: 70%!important}

.col-centered {
    float: none;
    margin: 0 auto;
}


.carousel-control > a > span {
	  font-size: 29px !important;
}
.carousel-control > a > span:hover {
	  color: white;
}
.carousel-col { 
    position: relative; 
    min-height: 1px; 
    padding: 5px; 
    float: left;
 }

 .active > div { display:none; }
 .active > div:first-child { display:block; }

/*xs*/
@media (max-width: 767px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		     { left: -50%; }
  .carousel-col                { width: 50%; }
	.active > div:first-child + div { display:block; }
}

/*sm*/
@media (min-width: 768px) and (max-width: 991px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		     { left: -50%; }
  .carousel-col                { width: 50%; }
	.active > div:first-child + div { display:block; }
}

/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
  .carousel-inner .active.left { left: -33%; }
  .carousel-inner .active.right { left: 33%; }
	.carousel-inner .next        { left:  33%; }
	.carousel-inner .prev		     { left: -33%; }
  .carousel-col                { width: 33%; }
	.active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
}

/*lg*/
@media (min-width: 1200px) {
  .carousel-inner .active.left { left: -16%; }
  .carousel-inner .active.right{ left:  16%; }
	.carousel-inner .next        { left:  16%; }
	.carousel-inner .prev		     { left: -16%; }
  .carousel-col                { width: 16%; }
	.active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
	.active > div:first-child + div + div + div { display:block; }
	.active > div:first-child + div + div + div + div { display:block; }
		.active > div:first-child + div + div + div + div + div { display:block; }

}

.block {
	width: 306px;
	height: 230px;
}

.red {background: red;}

.blue {background: blue;}

.green {background: green;}

.yellow {background: yellow;}

</style>

<script>

$('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i = 0; i < 5; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo($(this));
	}
});

</script>
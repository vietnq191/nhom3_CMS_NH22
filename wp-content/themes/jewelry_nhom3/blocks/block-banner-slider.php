<?php

?>

<div class="margin-top-banner-floor group-floor sub-banner-home banner1">
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <?php
							$categories = get_categories(array(
								'hide_empty'       => 0
							));

							$number_of_categories = 3; // Whatever you want to 
							$categories = array_slice($categories, 0, $number_of_categories, true);
							foreach ($categories as $cat) :
								$thumbnail_id = get_term_meta($cat->term_id, 'category-image-id', true);
								$image =  wp_get_attachment_image_src($thumbnail_id, 'Full');
								// var_dump($image);
								// die();

							?>
                            <div class="mp-flexible-banner banner-flexible-column-1">
                                <div class="banners banners-carousel banners-load-owl-carousel">
                                    <div class="ty-banner__image-item" banner-default="banner-3496"> <a
                                            class="banner__link" href="#"><img
                                                class="ty-pict ty-banner__image img-lazyload " id="det_img_1899141122"
                                                src="<?php echo $image[0] ?>" style="width: 490px ; height: 260px"
                                                title="<?php echo $cat->name ?>" /></a> </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <!-- <div class="mp-flexible-banner banner-flexible-column-1">
								<div class="banners banners-carousel banners-load-owl-carousel">
									<div class="ty-banner__image-item" banner-default="banner-4346"> <a class="banner__link" href="https://www.pnj.com.vn/pnj-international/disneypnj/disney-kid/?itm_source=homepage&amp;itm_medium=fix_banner&amp;itm_campaign=Slide2&amp;itm_content=disney-baby-gifting"> <img class="ty-pict ty-banner__image img-lazyload " id="det_img_1899141122" data-src="https://cdn.pnj.io/images/promo/141/Baby_Gifting_494x247.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP89/dfPQAJdAN6CIDaegAAAABJRU5ErkJggg==" alt="Baby Gifting" title="Baby Gifting" /> </a> </div>
								</div>
							</div>
							<div class="mp-flexible-banner banner-flexible-column-1">
								<div class="banners banners-carousel banners-load-owl-carousel">
									<div class="ty-banner__image-item" banner-default="banner-3862"> <a class="banner__link" href="https://www.pnj.com.vn/uu-dai-com-bo-trang-suc/?itm_source=homepage&amp;itm_medium=fix_banner&amp;itm_campaign=slide3&amp;itm_content=uu-dai-combo-thang10"> <img class="ty-pict ty-banner__image img-lazyload " id="det_img_1547239415" data-src="https://cdn.pnj.io/images/promo/140/uudai-combo-t10_494x247CTA.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP89/dfPQAJdAN6CIDaegAAAABJRU5ErkJggg==" alt="Ưu đãi combo" title="Ưu đãi combo" /> </a> </div>
								</div>
							</div> -->
                        </div>
                    </div>
                </div>

 <script>


// Get the `navbar` inside it and move it in front of it
banner = document.querySelector(".banner1");
parent.insertBefore(banner, something);
</script>          

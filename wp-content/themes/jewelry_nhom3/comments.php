<?php
function glw_show_comments( $comment, $args, $depth){
    // echo '<pre>';
    // var_dump($comment);
    // echo '</pre>';
    global $count;
    $count++;
    if($comment->comment_approved == "1"):
?>

<li <?php comment_class( 'pb-10 count-'.$count ); ?> id="commnent-"<?php comment_ID(); ?>  >
    <div class="text pt-5">
        <span class="text-capitalize"><?php comment_author($comment); ?>:</spasn> <span>  <?php $commentRating = get_comment_meta( $comment->comment_ID, 'rating', true); ?>
        
        <?php  for ($x = 0; $x < 5; $x++) {
            if (($commentRating) - $x >= 1) {
                    echo '<i style="color:#ffc107;padding-right:4px" class="fa fa-star"></i>';
                } elseif ($commentRating - $x > 0) {
                    echo '<i style="color:#ffc107;padding-right:4px" class="fa fa-star-half-o"></i>';
                } else {
                    echo '<i style="color:#ffc107;padding-right:4px" class=" fa fa-star-o"></i>';
                        }
            } ?>
        </span>
        <p>
            <?php echo nl2br(get_comment_text($comment)); ?>
        </p>

     
 <?php echo get_comment_date( 'd\/m\/Y' ) ;?>
          <?php comment_reply_link( 
                array_merge(
                    $args, 
                    array('depth' =>  $depth, 'max_depth' => $args['max_depth'])
                )
            );
        ?>
        </h6>
        
    </div>
</li>
<?php
    endif;
}
?>
<div class="comment-area mr-minus-30">
    <div class="comment-list mb-60">
        <div class="comment-title mb-40">
            <h5 class="mb-5">
            <?php
            comments_number(
                __('Chưa có bình luận nào','glw'),
                __('Một bình luận','glw'),
                __('% bình luận','glw')
            );
            ?>
            </h5>
            <div class="horizontal-line">
                <hr class="top" />
                <hr class="bottom" />
            </div>
        </div>
        <ul>
            <?php 
            wp_list_comments( array('callback' => 'glw_show_comments'));
            ?>
        </ul>
        <?php 
        if(get_comment_pages_count( )>1 && get_option('page_comments')):
        ?>
        <div class="clear"></div>
        <nav id="comment-nav">
            <div class="nav-previous float-left"><?php previous_comments_link( __('<< Previous','glw') ); ?></div>
            <div class="nav-previous float-right"><?php next_comments_link( __('Next >>','glw') ); ?></div>
        </nav>
        <?php 
        endif;
        ?>
        <?php 
        if(!comments_open( )):
        ?>
        <h4 class="title section textcenter">
        <?php _e('Bình luận hiện tại đang đóng, vui lòng quay lại sau.' , 'glw'); ?>
        </h4>
        <?php
        endif;
        ?>
    </div>
    
</div>

    <?php if (get_option('woocommerce_review_rating_verification_required') === 'no' || wc_customer_bought_product('', get_current_user_id(), $product->id)) : ?>

        <div id="review_form_wrapper">
            <div id="review_form">
                <?php
                $commenter = wp_get_current_commenter();

                $comment_form = array(
                    'title_reply'          => have_comments() ? __('Add a review', 'woocommerce') : __('', '')  ,
                    'title_reply_to'       => __('Leave a Reply to %s', 'woocommerce'),
                    'comment_notes_before' => '',
                    'comment_notes_after'  => '',
                    'fields'               => array(
                        'author' => '<div class="row ">
                        <div class="comment-form-author col-xs-12 col-sm-6">' . '<label for="author">' . __('Tên', 'woocommerce') . ' <span class="required">*</span></label> <br>' .
                        
                            '<input class=" form-control" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" required="true" /></div>',
                            
                            
                        'email'  => '
                        <div class="comment-form-email col-xs-12 col-sm-6"><label for="email">' . __('Email', 'woocommerce') . ' <span class="required">*</span></label><br>' .
                        
                            '<input class=" form-control" id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" required="true" /></div>
                            </div>',
                    ),
                    'label_submit'  => __('Gửi bình luận', 'woocommerce'),
                    'logged_in_as'  => '',
                    'comment_field' => ''
                );

                if (get_option('woocommerce_enable_review_rating') === 'yes') {
                    $comment_form['comment_field'] = '<p  class="comment-form-rating"><label for="rating">' . __('Gửi nhận xét của bạn', 'woocommerce') . '<span> *</span></label><select name="rating" id="rating">
                        <option value="">' . __('Rate&hellip;', 'woocommerce') . '</option>
                        <option value="5">' . __('Perfect', 'woocommerce') . '</option>
                        <option value="4">' . __('Good', 'woocommerce') . '</option>
                        <option value="3">' . __('Average', 'woocommerce') . '</option>
                        <option value="2">' . __('Not that bad', 'woocommerce') . '</option>
                        <option value="1">' . __('Very Poor', 'woocommerce') . '</option>
                    </select></p>';
                }
                $comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . __('Bình luận', 'woocommerce') . '<span> *</span></label><textarea id="comment" name="comment" cols="45" rows="5" required="true"></textarea></p>';


                comment_form(apply_filters('woocommerce_product_review_comment_form_args', $comment_form));
                ?>
            </div>
        </div>

    <?php endif; ?>

    <div class="clear"></div>
<style>
.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
    text-transform: none;
    height: 40px;
    line-height: 26px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background: #003468;
    border-color: #003468;
    border-radius: 5px;
    min-width: 150px;
    font-weight: 400;
    color:white;
}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover {
    background: #003468;
   color:white;
}
.comment-form-rating {
        padding:0;
    margin:0;
}
.stars span a{
    padding-right:20px;
    font-size:22px !important;
}

/*.stars span a:hover:before{*/
/*    background_color:red;*/
/*    color:yellow;*/
/*}*/

/* Horizontal Line 
-------------------*/
.horizontal-line hr {
    border-bottom: 1px solid #6d6d6d;
    border-top: 0 none;
    margin: 0;
}
.horizontal-line .top {
    margin-bottom: 2px;
    width: 68px;
}
.horizontal-line .bottom {
    width: 35px;
}

input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder{
	opacity:1;
}
input::-ms-input-placeholder,
textarea::-ms-input-placeholder{
	opacity:1;
}
select:focus,
input:focus,
textarea:focus {
	outline: 0px;
}
form label {
	font-weight: 500;
	color:black;
}
.custom-select {
	position: relative;
}

.comment-list li {
  border: 1px solid #f1f1f1;
  padding: 1px 40px;
      background-color: #fff;
          border-radius: 8px;
}

ul .children {
    margin-left:50px;
}

.comment-form-cookies-consent {
    display:none;
}
.text-capitalize {
    margin: 0; 
}
.text-capitalize ~ p{
    margin: 0; 
}
</style>

<!-- /.Comments Area End -->
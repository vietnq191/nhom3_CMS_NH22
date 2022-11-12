<?php
add_filter('show_admin_bar', '__return_true');
if (!function_exists('mytheme_setup')) {
	function mytheme_setup()
	{
		register_nav_menu('primary-menu', 'Primary menu');
	}
	add_action('init', 'mytheme_setup');
}
function load_stylesheets()
{
	wp_enqueue_style('canonical', 'https://www.pnj.com.vn');
	wp_enqueue_style('icon', 'https://cdn.pnj.io/images/image-update/favicon/pnj-icon.ico');
	wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
	wp_enqueue_style('apple-touch-icon', 'https://cdn.pnj.io/images/image-update/pnjLite/icon-192x192.png');
	wp_enqueue_style('text', 'https://cdn.pnj.io/assets/design/themes/pnjrovski/css/standalone.5.4.5.1.4.3.4.2044.4b9975dc2c194e59ef90c5b8438b9dba1659946932.css');
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
	wp_register_style('main-style', get_template_directory_uri() . '/style.css', 'all');
	wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
function my_scripts()
{
	wp_enqueue_script('bootstrap-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');
	wp_enqueue_script('mytheme-js', get_template_directory_uri() . '/script.js');
}
add_action('wp_enqueue_scripts', 'my_scripts');


function custom_header_metadata()
{
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" data-ca-mode="full" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="description"
    content="PNJ tự hào là công ty chế tác và bán lẻ trang sức hàng đầu tại châu Á ❤️Khách hàng là trọng tâm ✔️Mua Online nhanh chóng, đơn giản ☎️1800545457 (Miễn Phí)" />
<meta name="keywords" content=" pnj, trang suc pnj" />
<meta name="facebook-domain-verification" content="kettd0n55emqoq27m2tphfbyanxups" />
<meta name="robots" content="index,follow" />
<meta name="format-detection" content="telephone=no">
<meta name="pnj:s" content="217" />
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@Twitter">
<meta name="twitter:title" content="Trang Sức Cao Cấp PNJ | Cty Cổ Phần Vàng Bạc Đá Quý Phú Nhuận">
<meta name="twitter:description"
    content="PNJ tự hào là công ty chế tác và bán lẻ trang sức hàng đầu tại châu Á ❤️Khách hàng là trọng tâm ✔️Mua Online nhanh chóng, đơn giản ☎️1800545457 (Miễn Phí)">
<meta name="twitter:creator" content="@Twitter">
<meta name="twitter:image" content="https://www.pnj.com.vn/images/logo/logo_pnj.png"> <!-- FACEBOOK OPEN GRAPH -->
<meta property="og:title" content="Trang Sức Cao Cấp PNJ | Cty Cổ Phần Vàng Bạc Đá Quý Phú Nhuận" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.pnj.com.vn/" />
<meta property="og:image" content="https://www.pnj.com.vn/images/logo/logo_pnj.png" />
<meta property="og:description"
    content="PNJ tự hào là công ty chế tác và bán lẻ trang sức hàng đầu tại châu Á ❤️Khách hàng là trọng tâm ✔️Mua Online nhanh chóng, đơn giản ☎️1800545457 (Miễn Phí)" />
<meta property="og:site_name" content="PNJ" />
<meta property="fb:app_id" content="420750076123621" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="PNJ">
<meta name="theme-color" content="#003468" />
<?php

}
add_action('wp_head', 'custom_header_metadata');
if (!function_exists('mytheme_menu')) {
	function mytheme_menu($slug)
	{
		$menu = array(
			'theme_location' => $slug,
			'container' => 'nav',
			'container_class' => $slug,
			'items_wrap'      => '<ul class="ty-menu__items cm-responsive-menu">%3$s</ul>',
			'add_li_class'  => 'ty-menu__item cm-menu-item-responsive',
			'add_a_class'     => 'ty-menu__item-link',
			'link_before' => '<span >',
			'link_after' => '</span>',
			//  'walker' => new submenu_walker
		);
		wp_nav_menu($menu);
	}
}
if (!function_exists('mytheme_mega_menu')) {
	function mytheme_mega_menu($slug)
	{
		require_once('include/walker.php');
		$menu = array(
			'theme_location' => $slug,
			'depth' => 0,
			'menu_class'  => 'nav navbar-nav',
			'container' => 'nav',
			'walker'  => new BootstrapNavMenuWalker()
			//  'walker' => new submenu_walker
		);
		wp_nav_menu($menu);
	}
}
function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_class_on_a_tag($classes, $item, $args)
{
	if (isset($args->add_a_class)) {
		$classes['class'] = $args->add_a_class;
	}
	return $classes;
}
add_filter('nav_menu_link_attributes', 'add_class_on_a_tag', 1, 3);
// class submenu_walker extends Walker_Nav_Menu {
//     public function start_lvl( &$output, $depth = 0, $args = array() )
//     {
//       $output .= "<div class=\"ty-menu__submenu\">";
//       $output .= "<ul class=\"ty-menu__submenu-items cm-responsive-menu-submenu no-picture\">\n";
//     }
//     public function end_lvl( &$output, $depth = 0, $args = array() )
//     {
//         $output .= "</ul>\n";
//         $output .= "</div>";
//     }
//     public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
//     {
//       $class_li = $class_a = '';
//       $arr_class_li = empty($item->classes) ? array() : (array) $item->classes;
//       array_push($arr_class_li, 'menu-item-'.$item->ID);
//     }
//     public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
//     {
//       $output .= "</li>\n";


//     }
// }
function slider_post_type()
{

	$label = array(
		'name' => 'Slider', //Tên post type dạng số nhiều
		'singular_name' => 'Slider' //Tên post type dạng số ít
	);

	$args = array(
		'labels' => $label, //Gọi các label trong biến $label ở trên
		'description' => 'Slider', //Mô tả của post type
		'supports' => array(
			'title',
			'thumbnail'
		), //Các tính năng được hỗ trợ trong post type
		'hierarchical' => false,
		'public' => true, //Kích hoạt post type
		'show_ui' => true, //Hiển thị khung quản trị như Post/Page
		'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
		'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
		'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
		'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
		'menu_icon' => 'dashicons-format-image', //Đường dẫn tới icon sẽ hiển thị
		'can_export' => true, //Có thể export nội dung bằng Tools -> Export
		'has_archive' => true, //Cho phép lưu trữ (month, date, year)
		'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
		'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
		'capability_type' => 'post' //
	);

	add_theme_support('post-thumbnails');
	register_post_type('slider', $args);
}
add_action('init', 'slider_post_type');


//add image for category
/**
 * Plugin class
 **/
if (!class_exists('CT_TAX_META')) {

	class CT_TAX_META
	{

		public function __construct()
		{
			//
		}

		/*
    * Initialize the class and start calling our hooks and filters
    * @since 1.0.0
   */
		public function init()
		{
			add_action('category_add_form_fields', array($this, 'add_category_image'), 10, 2);
			add_action('created_category', array($this, 'save_category_image'), 10, 2);
			add_action('category_edit_form_fields', array($this, 'update_category_image'), 10, 2);
			add_action('edited_category', array($this, 'updated_category_image'), 10, 2);
			add_action('admin_enqueue_scripts', array($this, 'load_media'));
			add_action('admin_footer', array($this, 'add_script'));
		}

		public function load_media()
		{
			wp_enqueue_media();
		}

		/*
    * Add a form field in the new category page
    * @since 1.0.0
   */
		public function add_category_image($taxonomy)
		{ ?>
<div class="form-field term-group">
    <label for="category-image-id"><?php _e('Image', 'hero-theme'); ?></label>
    <input type="hidden" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
    <div id="category-image-wrapper"></div>
    <p>
        <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button"
            name="ct_tax_media_button" value="<?php _e('Add Image', 'hero-theme'); ?>" />
        <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove"
            name="ct_tax_media_remove" value="<?php _e('Remove Image', 'hero-theme'); ?>" />
    </p>
</div>
<?php
		}

		/*
    * Save the form field
    * @since 1.0.0
   */
		public function save_category_image($term_id, $tt_id)
		{
			if (isset($_POST['category-image-id']) && '' !== $_POST['category-image-id']) {
				$image = $_POST['category-image-id'];
				add_term_meta($term_id, 'category-image-id', $image, true);
			}
		}

		/*
    * Edit the form field
    * @since 1.0.0
   */
		public function update_category_image($term, $taxonomy)
		{ ?>
<tr class="form-field term-group-wrap">
    <th scope="row">
        <label for="category-image-id"><?php _e('Image', 'hero-theme'); ?></label>
    </th>
    <td>
        <?php $image_id = get_term_meta($term->term_id, 'category-image-id', true); ?>
        <input type="hidden" id="category-image-id" name="category-image-id" value="<?php echo $image_id; ?>">
        <div id="category-image-wrapper">
            <?php if ($image_id) { ?>
            <?php echo wp_get_attachment_image($image_id, 'thumbnail'); ?>
            <?php } ?>
        </div>
        <p>
            <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button"
                name="ct_tax_media_button" value="<?php _e('Add Image', 'hero-theme'); ?>" />
            <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove"
                name="ct_tax_media_remove" value="<?php _e('Remove Image', 'hero-theme'); ?>" />
        </p>
    </td>
</tr>
<?php
		}

		/*
   * Update the form field value
   * @since 1.0.0
   */
		public function updated_category_image($term_id, $tt_id)
		{
			if (isset($_POST['category-image-id']) && '' !== $_POST['category-image-id']) {
				$image = $_POST['category-image-id'];
				update_term_meta($term_id, 'category-image-id', $image);
			} else {
				update_term_meta($term_id, 'category-image-id', '');
			}
		}

		/*
   * Add script
   * @since 1.0.0
   */
		public function add_script()
		{ ?>
<script>
jQuery(document).ready(function($) {
    function ct_media_upload(button_class) {
        var _custom_media = true,
            _orig_send_attachment = wp.media.editor.send.attachment;
        $('body').on('click', button_class, function(e) {
            var button_id = '#' + $(this).attr('id');
            var send_attachment_bkp = wp.media.editor.send.attachment;
            var button = $(button_id);
            _custom_media = true;
            wp.media.editor.send.attachment = function(props, attachment) {
                if (_custom_media) {
                    $('#category-image-id').val(attachment.id);
                    $('#category-image-wrapper').html(
                        '<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />'
                    );
                    $('#category-image-wrapper .custom_media_image').attr('src', attachment.url)
                        .css('display', 'block');
                } else {
                    return _orig_send_attachment.apply(button_id, [props, attachment]);
                }
            }
            wp.media.editor.open(button);
            return false;
        });
    }
    ct_media_upload('.ct_tax_media_button.button');
    $('body').on('click', '.ct_tax_media_remove', function() {
        $('#category-image-id').val('');
        $('#category-image-wrapper').html(
            '<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />'
        );
    });
    // Thanks: http://stackoverflow.com/questions/15281995/wordpress-create-category-ajax-response
    $(document).ajaxComplete(function(event, xhr, settings) {
        var queryStringArr = settings.data.split('&');
        if ($.inArray('action=add-tag', queryStringArr) !== -1) {
            var xml = xhr.responseXML;
            $response = $(xml).find('term_id').text();
            if ($response != "") {
                // Clear the thumb image
                $('#category-image-wrapper').html('');
            }
        }
    });
});
</script>
<?php }
	}

	$CT_TAX_META = new CT_TAX_META();
	$CT_TAX_META->init();
}

//register MegaMenu widget if the Mega Menu is set as the menu location
$location = 'primary-menu';
$css_class = 'mega-menu-parent';
$locations = get_nav_menu_locations();
if (isset($locations['primary-menu'])) {
	$bla_menu = get_term($locations['primary-menu'], 'nav_menu');
	if ($items = wp_get_nav_menu_items($bla_menu->name)) {
		foreach ($items as $item) {
			if (in_array($css_class, $item->classes)) {
				register_sidebar(array(
					'id'   => 'mega-menu-item-' . $item->ID,
					'description' => 'Mega Menu items',
					'name' => $item->title . ' - Mega Menu',
					'before_widget' => '<li id="%1$s" class="mega-menu-item">',
					'after_widget' => '</li>',
				));
			}
		}
	}
}
// add_action('widgets_init', 'my_register_sidebars');
// function my_register_sidebars()
// {
// 	/* Register the 'right' sidebar. */
// 	register_sidebar(
// 		array(
// 			'id' => 'right',
// 			'name' => __('Right Sidebar'),
// 			'description' => __('A short description of the sidebar.'),
// 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 			'after_widget' => '</div>',
// 			'before_title' => '<h3 class="widget-title">',
// 			'after_title' => '</h3>',
// 		)
// 	);
// }
/*
sidebar layout tin tuc
 */
function custom_sidebar_tintuc()
{
	$args = array(

		'id' =>

		'layout_tintuc',

		'name' => __(
			'Layout Tin Tuc',

			'text_domain'
		),

		'description' => __(
			'Layout Tin Tuc',

			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget

%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_sidebar_tintuc');
/*
LOGO FOOTER
 */
function custom_logo_footer()
{
	$args = array(

		'id' =>

		'logo_footer',

		'name' => __(
			'Logo Footer',

			'text_domain'
		),

		'description' => __(
			'Logo Footer',

			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget

%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_logo_footer');
function custom_footer_widget_one()
{
	$args = array(

		'id' =>

		'footer-widget-col-one',

		'name' => __(
			'Footer Column One',

			'text_domain'
		),

		'description' => __(
			'Column One',

			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget

%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_one');
/**
 * Footer Widget Two
 */
function custom_footer_widget_two()
{
	$args = array(
		'id' =>
		'footer-widget-col-two',
		'name' => __(
			'Footer Column Two',
			'text_domain'
		),
		'description' => __(
			'Column Two',
			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget
%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_two');
/**
 * Footer Widget Three
 */
function custom_footer_widget_three()
{
	$args = array(
		'id' =>
		'footer-widget-col-three',
		'name' => __(
			'Footer Column Three',
			'text_domain'
		),
		'description' => __(
			'Column Three',
			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget
%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_three');
/**
 * Footer Widget Three
 */
function custom_footer_widget_four()
{
	$args = array(
		'id' =>
		'footer-widget-col-four',
		'name' => __(
			'Footer Column Four',
			'text_domain'
		),
		'description' => __(
			'Column Four',
			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget
%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_four');
